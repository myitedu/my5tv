<?php
session_start();
$_SESSION['counter'] = $_SESSION['counter']??1;
$counter = $_SESSION['counter']++;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$zoo_name = $_GET['zoo_name'] ?? 'Bakha';
$zoo_location = $_GET['location'] ?? 'New York';
$animals = [
    [
        'name' => 'Elephants',
        'img' => 'https://mediad.publicbroadcasting.net/p/wxxi/files/styles/x_large/public/201910/chana_and_moki.jpg'
    ],
    [
        'name' => 'Giraffe',
        'img' => 'https://api.army.mil/e2/c/images/2020/06/26/9203bf2a/size0.jpg'
    ],
    [
        'name' => 'Baboon',
        'img' => 'https://s28164.pcdn.co/files/Western-Lowland-Gorilla-0088-8441-1080x720.jpg'
    ],
    [
        'name' => 'Panda',
        'img' => 'https://static01.nyt.com/images/2020/04/07/world/07pandas-1/merlin_171352533_0eca9d09-0fe4-4222-bbbd-7b7b4a748a16-articleLarge.jpg?quality=75&auto=webp&disable=upscale'
    ],
    [
        'name' => 'Badger',
        'img' => 'https://www.oregonzoo.org/sites/default/files/styles/article-full/public/H_red-panda-Mei-Mei.jpg?itok=aKAw5YfQ'
    ],
    [
        'name' => 'Lion',
        'img' => 'https://pbs.twimg.com/media/EeVPInOXkAEbcTA.jpg'
    ],
    [
        'name' => 'Zebra',
        'img' => 'https://media.9news.com/assets/KUSA/images/e2b24c24-b222-4c72-83e8-3d8a328187aa/e2b24c24-b222-4c72-83e8-3d8a328187aa_750x422.jpg'
    ],
];
?>
<div class="container-fluid">
    <div class="mytitle">Welcome to <?php echo $zoo_name; ?>'s <br> Zoo!</div>
    <div class="photo_album">

        <?php
        foreach ($animals as $animal){
        ?>
        <div class="photo">
            <a href="https://en.wikipedia.org/wiki/<?php echo $animal['name'];?>"><img src="<?php echo $animal['img'];?>"></a>
            <div class="photo_title"><?php echo $animal['name']; ?></div>
        </div>
        <?php
        }
        ?>

    </div>
    <div class="counter"><?php echo $counter;?></div>

</div>
<style>

    .counter{
        height: 150px;
        width: 150px;
        min-width: 150px;
        max-width: 200px;
        min-height: 150px;
        max-height: 200px;
        background-color: darkred;
        color: #fcde00;
        font-size: 5em;
        text-align: center;
        line-height: 135px;
        position: absolute;
        left: 5px;
        bottom: 10px;
        border-radius: 50%;
        text-shadow: 2px 2px black;
        font-weight: bolder;
        border: 4px solid darkblue;
    }

    .photo_album {
        width: 60%;
        text-align: center;
        position: relative;
        left: 14%;
        top: 40px;
    }

    .mytitle {
        width: 200px;
        height: 200px;
        padding: 10px;
        position: absolute;
        top: 60%;
        left: 41%;
        background-image: url(/img/banner.png);
        background-repeat: no-repeat;
        background-size: 100% 100%;
        font-family: monospace;
        font-size: 124%;
        text-shadow: 2px 2px #4d1b1b;
        text-align: center;
        line-height: 20px;
        color: #abfe09;
        padding-top: 53px;
    }

    body {
        background-image: url("https://i.dlpng.com/static/png/1562292-zoo-png-image-background-zoo-png-1600_1142_preview.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .photo_title {
        background-color: #052ecf;
        border: 1px solid #4e3c05;
        text-align: center;
        border-radius: 40px;
        color: #fce056;
    }

    .photo img {
        width: 100%;
        border-radius: 40px;
        border: 5px double darkred;
    }

    .photo {
        width: 150px;
        display: inline-block;
        margin: 3px;
    }

    html, body {
        width: 100%;
        height: 100%;
    }
</style>
</body>
</html>