<?php
$curl = curl_init();
$file_path = "http://myitedu.us/img/webdevelopment2020.png";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://image-to-text2.p.rapidapi.com/cloudVision/imageToText?source=$file_path&sourceType=url",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{ \"source\": \"$file_path\", \"sourceType\": \"url\"}",
    CURLOPT_HTTPHEADER => array(
        "accept: application/json",
        "content-type: application/json",
        "x-rapidapi-host: image-to-text2.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response,1);
    echo "<pre>";
    echo $response['text'];
    echo "</pre>";
}