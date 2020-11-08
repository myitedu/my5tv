<?php
//$uid = 1525177224;//Sardor
//$uid = 18616163165;
//$uid = 1695815128;
$uid = 1823290154;
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://instagram28.p.rapidapi.com/medias?user_id=$uid",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: instagram28.p.rapidapi.com",
        "x-rapidapi-key: b6b7a0ef70mshe634108ad99761bp117fbejsn01401505cc04"
    ),
));
$response = curl_exec($curl);
$response = json_decode($response, 1);
$err = curl_error($curl);
curl_close($curl);

