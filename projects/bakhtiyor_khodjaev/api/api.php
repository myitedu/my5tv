<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php

$city_name  = $_GET['city_name']??'Chicago';
$city_name = str_replace("+","%20", $city_name);
$city_name2  = $_GET['city_name2']??'Chicago';

if ($city_name == 'Other'){
    $city_name = $city_name2;
}

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?query=$city_name&locale=en_US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: hotels4.p.rapidapi.com",
        "x-rapidapi-key: 7xMayFzkf7mshXdoD9ndBCxTd8W1p1qjCs3jsn1Hu3R7Y5pOCE"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$hotels = json_decode($response,1);
echo "<pre>";
$items = [];
foreach ($hotels['suggestions'] as $hotel) {
    $entities = $hotel['entities'];
    foreach ($entities as $entity){
        $items[] = $entity;
    }
}


/*
 *     [geoId] => 3368
            [destinationId] => 1540840
            [landmarkCityDestinationId] =>
            [type] => CITY
            [redirectPage] => DEFAULT_PAGE
            [latitude] => 41.296696981864
            [longitude] => 69.256907654626
            [caption] => Tashkent, Uzbekistan
            [name] => Tashkent
 */
?>


<table class="table table-bordered">
    <tr>
        <th>geoId</th>
        <th>destinationId</th>
        <th>landmarkCityDestinationId</th>
        <th>type</th>
        <th>redirectPage</th>
        <th>latitude</th>
        <th>longitude</th>
        <th>caption</th>
        <th>name</th>
    </tr>
<?php foreach ($items as $item) { ?>
    <tr >
        <td><?php echo $item['geoId'];?></td >
        <td><?php echo $item['destinationId'];?></td >
        <td><?php echo $item['landmarkCityDestinationId'];?></td >
        <td><?php echo $item['type'];?></td >
        <td><?php echo $item['redirectPage'];?></td >
        <td><a href="https://www.latlong.net/c/?lat=<?php echo $item['latitude'];?>&long=<?php echo $item['longitude'];?>">MAP</a> </td >
        <td><?php echo $item['longitude'];?></td >
        <td><?php echo $item['caption'];?></td >
        <td><?php echo $item['name'];?></td >
        <td> caption</td >
        <td> name</td >
    </tr >
    <?php
    }
    ?>
</table>


</body>
</html>


