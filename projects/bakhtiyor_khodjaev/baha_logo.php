<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<body>
<?php

$video = $_GET['video']??0;
$video = (int) $video;
if ($video>5){
    $video = 0;
}
$videos = [
    'https://www.youtube.com/embed/fKNdoxRld34',
    'https://www.youtube.com/embed/2vs2E8H8k1A',
    'https://www.youtube.com/embed/hqDT5_4z_YI',
    'https://www.youtube.com/embed/PfjcgcOfgww',
    'https://www.youtube.com/embed/qeiKKgsvHyY',
    'https://www.youtube.com/embed/Wr4v1wFS_OY',

];
?>
<?php
$logo = [
    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRg8dOB9jHcTaJzO71NOsIABrOsMs3WFojS_Q&usqp=CAU',

    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLJGKVTriiiB3Pfb6nylh_8julYqBGuMbyHg&usqp=CAU',

    'https://listcarbrands.com/wp-content/uploads/2016/02/Bugatti-emblem.jpg',

    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoAaS1nfKtLpNqGx2Po1AsWM4axQvJB5vDlQ&usqp=CAU',

    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSVp3g8v1H7KAUMlFOGkOrU-dNTxz1PZdoi1Q&usqp=CAU',

    'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTeXbxHIPIFP3xgyRd9GmUUjAnTdpc2KT6faw&usqp=CAU'
];
?>


<div class="container-fluid">
    <div class="backimg">
        <iframe id="youtube" src="<?=$videos[$video];?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
    </div>
    <?php
    foreach ($logo as $id=>$logos){
    ?>
    <div class="logos">
        <div class="bahalogo"><a href="baha_logo.php?video=<?=$id;?>"><img src="<?php echo $logos;?>"></a>
        </div>
        <?php
        }
        ?>
    </div>
</div>

<style>
    .logos{
        width: 150px;
        display: inline-block;
        float: left;
        text-align: center;
    }
    #youtube{
        width: 610px;
        height: 342px;
        position: relative;
        left: 282px;
        top: 87px;
    }
    .backimg {
        display: inline-block;
        width: 1150px;
        height: 700px;
        margin: 50px auto;
        background-image: url("https://kitv.images.worldnow.com/images/19425976_G.jpeg?auto=webp&disable=upscale&height=560&fit=bounds&lastEditedDate=1589897453000");
        background-size: 100% 100%;
        position: relative;
        left: 70px;
    }
    body{
        background-color: black;
    }
    .bahalogo img{
        width: 130px;
        height: 80px;
        border-radius: 40px;
        border: 5px solid gold;
        margin-top: 30px;
        margin-bottom: 10px;
    }
</style>

</body>
</html>

