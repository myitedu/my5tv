<?php
namespace Api;

class Bingnews{
    protected $curl;
    public $category;
    public function __construct()
    {
        $this->curl = curl_init();
    }
    public function connect(){
        curl_setopt_array($this->curl, [
            CURLOPT_URL => "https://bing-news-search1.p.rapidapi.com/news?safeSearch=Off&category=$this->category&textFormat=Raw",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-bingapis-sdk: true",
                "x-rapidapi-host: bing-news-search1.p.rapidapi.com",
                "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE",
                "x-search-location: technology"
            ],
        ]);
    }
    public function fetch(){
        $this->connect();
        $response = curl_exec($this->curl);
        $err = curl_error($this->curl);
        curl_close($this->curl);
        if ($err) {
            return [
                'error' => 1,
                'description'=> $err,
                'result' => null
            ];
        }
        return [
            'error' => 0,
            'description' => 'No error',
            'result' => $response
        ];
    }
}
$obj = new Bingnews();
$obj->category = $category;
$items = $obj->fetch();
$items = json_decode($items['result'],1);

/*
 *  [_type] => News
    [webSearchUrl] => https://www.bing.com/news/search?q=top+stories&form=TNSA02
    [value] => Array
        (
            [0] => Array
                (
                    [_type] => NewsArticle
                    [name] => Texas' power outages, water shortages put bigger strain on hospitals
                    [url] => https://www.msn.com/en-us/news/us/texas-power-outages-water-shortages-put-bigger-strain-on-hospitals/ar-BB1dNL7J
                    [image] => Array
                        (
                            [_type] => ImageObject
                            [thumbnail] => Array
                                (
                                    [_type] => ImageObject
                                    [contentUrl] => https://www.bing.com/th?id=OVFT.Xsh_CkMxlmxAzKAmoJBFpy&pid=News
                                    [width] => 1200
                                    [height] => 630
                                )

                            [isLicensed] => 1
                        )

                    [description] => As a historic winter storm knocks out power and bursts pipes across Texas, hospitals in the lone star state are facing additional stress.
                    [provider] => Array
                        (
                            [0] => Array
                                (
                                    [_type] => Organization
                                    [name] => ABC News
                                    [image] => Array
                                        (
                                            [_type] => ImageObject
                                            [thumbnail] => Array
                                                (
                                                    [_type] => ImageObject
                                                    [contentUrl] => https://www.bing.com/th?id=AR_0cfcddaa71cae000b74e3bf52bc84d78
                                                )

                                        )

                                )

                        )

                    [datePublished] => 2021-02-18T15:53:00.0000000Z
                )
 */