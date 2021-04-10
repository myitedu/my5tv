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
<div id="photos">
    <div class="title">Jon Toshmatov's Photo Album</div>
    <?php
    $dir = "photos2/";

    // Open a directory, and read its contents
    if (is_dir($dir)){
        if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                $valid = strpos($file,".jpg");
                if ($valid) {
                    echo "<img class='img' src='photos2/$file'>";
                }
            }
            closedir($dh);
        }
    }
    ?>
</div>

<style>
    body{
        background-color: black;
    }
    .title{
        text-align: center;
        font-size: 45px;
        color: goldenrod;
        font-family: Haettenschweiler;
        padding: 5px;
        margin: 5px;
    }
    #photos{
        text-align: center;
        background-image: url("https://i.pinimg.com/originals/5e/f9/2e/5ef92e22dd078b33a181c92a9767e341.png");
        background-size: 100%;
        background-repeat: repeat;
        background-color: black;
    }
    .img:hover{
        opacity: 1.0;
    }
    .img{
        width: 71%;
        margin: auto;
        border-radius: 20px;
        background-color: #000;
        margin: 20px;
        border: 5px dotted #710303;
        opacity: 0.2;
        padding: 5px;
    }
</style>

</body>
</html>