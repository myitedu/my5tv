<?php
$zipcode = $_GET['zipcode']??11229;
$zipcode = (int) $zipcode;
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://us-weather-by-zip-code.p.rapidapi.com/getweatherzipcode?zip=$zipcode",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: us-weather-by-zip-code.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$weather = null;
if ($err) {
    echo "cURL Error #:" . $err;
} else{
    $weather = json_decode($response, 1);
}
