<?php
function mening_api($keyword)
{
    if (empty($keyword)) {
        return false;
    }
    $curl = curl_init();
    $key = "AIzaSyBVXKEUxu-5g6rT3N6pyr6TpyNRaWEsd_w";
    //$api_url = "https://www.googleapis.com/customsearch/v1?key=$key&cx=017576662512468239146:omuauf_lfve&q=$keyword&callback=hndlr";
    $api_url = "https://www.googleapis.com/customsearch/v1?key=$key&cx=017576662512468239146:omuauf_lfve&q=$keyword";
    curl_setopt_array($curl, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: http://myitedu.uz",
            "x-rapidapi-key: ilovemyitedu2021"
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
        return false;
    }
    return $response;
}