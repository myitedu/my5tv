<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once "api.php";
echo "<pre>";
foreach ($response['data']['user']["edge_owner_to_timeline_media"]['edges'] as $instagram){
    $items = $instagram["node"]["display_resources"];
    foreach ($items as $item){
        echo "<div class='myimages'><a href='{$item['src']}'><img src='{$item['src']}'></a></div>";
        break;

    }
}

//["data"]

//["user"]

//["edges"]
?>

<style>
    .myimages img:hover{
        background-color: #0a2998;
        width: 101%;
        padding:10px;
        cursor: pointer;
    }

    .myimages img{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        background-color: darkred;
        border: 1px solid black;
        box-shadow: 3px 3px 3px 3px darkgray;
    }

    .myimages{
        width: 200px;
        height: 200px;
        padding:5px;
        display: inline-block;
        margin:5px;

        float: left;
    }
</style>


</body>
</html>