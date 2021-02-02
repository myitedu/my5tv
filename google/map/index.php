<!DOCTYPE html>
<html>
<head>
    <title>Custom Markers</title>
</head>
<body>
<?php
$google_api_key = "AIzaSyDJpd8bRVQQXvcZNNV0u54wQiAkGKyTo0M";
require_once "database.php";
$db = new \Database\database("myitedu");
$addresses = $db->sql("SELECT * FROM companies;");
$items = [];
foreach ($addresses as $address){
    $items[] = [
        'position' => "new google.maps.LatLng({$address['lat']},{$address['lng']})",
        'type' => "library"

    ];
}
$items = json_encode($items);
echo $items;
?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_api_key;?>&callback=initMap&libraries=&v=weekly"
        defer
></script>
<style type="text/css">
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
        height: 100%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<script>
    //PHP
    //[{"position":"new google.maps.LatLng(42.4962364,-90.6643241)","type":"library"},
    // {"position":"new google.maps.LatLng(42.496440,-90.664960)","type":"library"}]

    //JS
    //[{position: new google.maps.LatLng(40.6079215,-73.9417814),type: "library",}];


    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: new google.maps.LatLng(42.496340,-90.664150),
            zoom: 16,
        });
        const iconBase =
            "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
        const icons = {
            parking: {
                icon: iconBase + "parking_lot_maps.png",
            },
            library: {
                icon: iconBase + "library_maps.png",
            },
            info: {
                icon: iconBase + "info-i_maps.png",
            },
        };
        //const features = echo $items;?>
        const features = [{position:new google.maps.LatLng(42.4962364,-90.6643241),"type":"info"},
        {position:new google.maps.LatLng(42.496440,-90.664960),"type":"library"}]

        // Create markers.
        for (let i = 0; i < features.length; i++) {
            const marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map,
            });
        }
    }
</script>
<div id="map"></div>
</body>
</html>