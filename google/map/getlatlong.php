<?php
function getlatlong($address)
{
    if (empty($address)){
        return false;
    }
    $google_api_key = "AIzaSyDJpd8bRVQQXvcZNNV0u54wQiAkGKyTo0M";
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=$google_api_key",
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
        return null;
    } else {
        $response = json_decode($response, 1);
        return $response;
    }
}