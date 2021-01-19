<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://instagram-data1.p.rapidapi.com/user/feed?username=myitedu",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: instagram-data1.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

echo "<pre>";
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}