<?php
function get_userid($username='myitedu')
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://easy-instagram-data.p.rapidapi.com/userid?username=$username",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: easy-instagram-data.p.rapidapi.com",
            "x-rapidapi-key: 9997xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
//{"status":"success","result":{"user_id":"18616163165"}}
    if ($err) {
        return false;
    } else {
        $response = json_decode($response, 1);
        return $response['result']['user_id'];
    }
}