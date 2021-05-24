<?php
//error_reporting(0);
function fetchCountryDetails($country){
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://wft-geo-db.p.rapidapi.com/v1/geo/countries/$country",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: wft-geo-db.p.rapidapi.com",
            "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    return [
        'response' => $response,
        'error' => $err
    ];
}

$results = fetchCountryDetails('RU');
$results = json_decode($results['response'],1);
$jon = $results['data']['capital']??[];
$toshmatov = $results['data']['capital']??[];
echo "<pre>";
$ccodes = $results['data']['currencyCodes']??[];
$img = $results['data']['flagImageUri']??[];

echo "<p><label>City:</label> ".print_r($toshmatov,1)."</p>";
echo "<p><label>Code:</label> ".print_r($ccodes,1)."</p>";
echo "<p><label>Currency Codes:</label> </p>";
echo "<p><label>Image: </label> $img</p>";

echo "<img src='$img'";
?>

/*
 * array(1) {
  ["data"]=>
  array(7) {
    ["capital"]=>
    string(16) "Washington, D.C."
    ["code"]=>
    string(2) "US"
    ["currencyCodes"]=>
    array(1) {
      [0]=>
      string(3) "USD"
    }
    ["flagImageUri"]=>
    string(88) "http://commons.wikimedia.org/wiki/Special:FilePath/Flag%20of%20the%20United%20States.svg"
    ["name"]=>
    string(24) "United States of America"
    ["numRegions"]=>
    int(56)
    ["wikiDataId"]=>
    string(3) "Q30"
  }
}
 */