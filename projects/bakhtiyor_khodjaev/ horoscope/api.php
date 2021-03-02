<?php
function get_zodiakname($zodiakname)
{
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://horoscope5.p.rapidapi.com/general/daily?sign=cancer&date=$zodiakname",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: horoscope5.p.rapidapi.com",
        "x-rapidapi-key: a6c2319ce4msh1cbc7142c41b661p1a1989jsna28c2dcca890"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    return false;
} else {
    $response = json_decode($response, 1);
    return $response['result']['date']['description'];
}
}