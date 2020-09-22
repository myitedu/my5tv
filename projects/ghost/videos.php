<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once  "database.php";
$db = new \Database\database("myitedu");
$videos = $db->sql("SELECT id, link_id, path FROM videos;");
?>
<div class="container-fluid">

    <div class="myheader">
        Welcome to Bekhruz's Video Collection
    </div>

        <?php
            foreach ($videos as $video){
            ?>
            <div class="video">
                <img class="myflower" src="/img/myflower.png">
                <iframe class="myvideos" src="<?php echo $video['path']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img class="dancing_dude" src="https://fcit.usf.edu/matrix/wp-content/uploads/2017/01/DanceBot-3-LG.gif">
            </div>
        <?php
            }
        ?>

</div>
<style>
    .dancing_dude{
        left: -78px;
        top: -32px;
        position: relative;
        width: 100px;
        width: 70px;
        z-index: 100;
    }
    .myheader{
        text-align: center;
        font-size: 2.4em;
        font-family: "Lucida Handwriting";
        font-weight: bolder;
        color: pink;
        margin: 20px;
        text-shadow: 3px 3px #220000;
    }


    .video{
        display: inline-block;
        margin: 10px;
    }
    body{
        background-color: #1d886d;
        background-image: url("https://static.vecteezy.com/system/resources/thumbnails/001/198/050/small_2x/dotted-world-map.png");
        background-size: 100% 70%;
        background-repeat: no-repeat;
    }
    .myflower{
        left: 92px;
        top: -132px;
        position: relative;
        width: 100px;
        z-index: 100;
    }
    .myvideos{
        z-index: 99;
        width: 200px;
        border: 10px dotted #cf84e9;
        box-shadow: 5px 5px 5px 5px #171515;
        border-radius: 30px;
    }
</style>
</body>
</html>