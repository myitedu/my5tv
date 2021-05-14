<?php


class Api
{
    protected $curl;
    protected $response;
    protected $username;
    public $parms;
    private $userid;

    public function __construct()
    {
        $this->curl = curl_init();
        $this->parms = $_GET;
        $this->username = $this->parms['username'] ??'myitedu';
        $this->username = $this->username;
    }

    private function executeApi()
    {
        curl_setopt_array($this->curl, [
            CURLOPT_URL => "https://instagram39.p.rapidapi.com/getUserId?username=myitedu",
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: instagram39.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
            ],
        ]);
    }

    private function getUserId()
    {
        $this->executeApi();
        $response = $this->response = curl_exec($this->curl);
        $errors =$this->getError();
        $response = json_decode($response);
        $this->userid = $response->data->id??null;
    }

    public function getError()
    {
        return curl_error($this->curl);
    }


    public function getFeedByUserid(){
        $this->getUserId();
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://instagram39.p.rapidapi.com/getFeed?user_id={$this->userid}",
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: instagram39.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return json_decode($response);
    }

    public function __destruct()
    {
        curl_close($this->curl);
    }

}
$api = new Api();
echo "<pre>";
$obj = $api->getFeedByUserid();

$posts = $obj->data->edges;
echo "<hr>";
print_r($api->getError());

//Img url
//$feeds->data->edges[0]->node->display_url
//is_video : media_preview


?>

<?php foreach ($posts as $post): ?>
    <div class="photo">
        <img src="<?php echo $post->node->display_url;?>">
    </div>
<?php endforeach;?>
