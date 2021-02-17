<?php

$results = mening_api("Tashkent");

echo "<pre>";
    print_r($results);
echo "</pre>";

//curl -X GET 'https://test.api.amadeus.com/v1/shopping/flight-destinations?origin=PAR&maxPrice=200' -H 'Authorization: Bearer {{token}}'

function mening_api()
{
    $secretid = 'UC3ZFzZtRHlOpyhCIem9nWxO0ikmoyvr';
    $secretkey = 'jBdYFxRp4vgGi76K';


    $curls = curl_init();
    curl_setopt($curls, CURLOPT_URL, 'https://test.api.amadeus.com/v1/security/oauth2/token');
    curl_setopt($curls, CURLOPT_POST, true);
    curl_setopt($curls, CURLOPT_POSTFIELDS, "grant_type=client_credentials&client_id=$secretid&client_secret=$secretkey");
    curl_setopt($curls, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($curls, CURLOPT_RETURNTRANSFER, true);
    $token = curl_exec($curls);
    $data = json_decode($token,true);
    curl_setopt($curls, CURLOPT_URL, 'https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=LGA&destinationLocationCode=MCO&departureDate=2021-02-20&adults=1&travelClass=ECONOMY&nonStop=true&max=250');
    curl_setopt($curls, CURLOPT_POST, false);

    curl_setopt($curls, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' .$data['access_token']));
    $result = curl_exec($curls);
    if (curl_errno($curls)) {
        echo 'Error:' . curl_error($curls);
    }
    $result = json_decode($result, 1);
    return $result;
    curl_close ($curls);

}