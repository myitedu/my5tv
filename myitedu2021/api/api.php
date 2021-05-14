<?php
function getWeather($zipcode=11229){
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://us-weather-by-zip-code.p.rapidapi.com/getweatherzipcode?zip=$zipcode",
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: us-weather-by-zip-code.p.rapidapi.com",
            "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ],
    ]);
    $weather = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    return json_decode($weather,1);


}
$weather = getWeather($zipcode);
