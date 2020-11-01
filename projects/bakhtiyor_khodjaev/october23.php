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
$color = $_GET['color']??'white';
?>
<div style="background-color: red" class="mybox"><a href="october23.php?color=lion">Lion</a></div>
<div style="background-color: blue" class="mybox"><a href="october23.php?color=tiget">Toger</a></div>
<div style="background-color: green" class="mybox"><a href="october23.php?color=green">GREEN</a></div>
<div style="background-color: purple" class="mybox"><a href="october23.php?color=purple">PURPLE</a></div>
<div style="background-color: yellow" class="mybox"><a href="october23.php?color=yellow">YELLOW</a></div>

<style>

    body{
        background-color: <?php echo $color;?>;
    }

    .mybox{
        width: 80px;
        height: 80px;
        border: 1px solid black;
        text-align: center;
        line-height: 75px;
        display: inline-block;
        margin: 5px;
        color: lightgoldenrodyellow;
    }

    a {
        color: #040848;
    }
</style>
</body>
</html>

