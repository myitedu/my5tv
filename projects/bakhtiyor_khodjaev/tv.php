<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
$open = $_GET['open']??null;
$video = $_GET['video']??0;
$video = (int) $video;
if ($video>5){
    $video = 0;
}
$videos = [
    'https://www.youtube.com/embed/Q7hoynDj4WI',
    'https://www.youtube.com/embed/3Wj0Ks_87H8',
    'https://www.youtube.com/embed/Y4SlhTT9Ecg',
    'https://www.youtube.com/embed/BLhDL0Sr_mM',
    'https://www.youtube.com/embed/atEkAkPfpUY',
    'https://www.youtube.com/embed/V5PzDHbAtO4',

];
?>

<div id="living_room">
  <?if($open=='menu'):?>
    <div id="menu">
        <ul>
            <li><a href="tv.php?video=0">Video 1</a></li>
            <li><a href="tv.php?video=1">Video 2</a></li>
            <li><a href="tv.php?video=2">Video 3</a></li>
            <li><a href="tv.php?video=3">Video 4</a></li>
            <li><a href="tv.php?video=4">Video 5</a></li>
            <li><a href="tv.php?video=5">Video 6</a></li>
        </ul>
    </div>
    <?else:?>
    <iframe id="youtube" src="<?=$videos[$video];?>" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
    <?endif;?>

    <a href="tv.php?open=menu"><img id="remote_control" src="https://armstrongonewire.com/Content/images/support/EXP-Remote.png"></a>
</div>

<?=$videos[$video];?>

<style>

    #remote_control{
        width: 60px;
        position: absolute;
        top: 627px;
        left: 690px;
    }

    #menu{
        position: relative;
        left: 397px;
        top: 195px;
        width: 404px;
        height: 200px;
        background-color: white;
    }

    #youtube{
        position: relative;
        left: 397px;
        top: 195px;
        width: 404px;
        height: 200px;
    }

    #living_room{
        width: 1200px;
        height: 700px;
        background-color: #0e52b0;
        margin: 100px auto;
        background-image: url("https://images.idgesg.net/images/article/2020/02/pcw-windows10-tv-100829154-large.jpg");
        background-size: 100% 100%;
        border: 3px solid #000000;
        border-radius: 15px;
    }

    body{
        background-color: #1c1610;
    }

</style>

</body>
</html>