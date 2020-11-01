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

$number = $_GET['number']??0;
$number = (int) $number;


?>
<div id="wrapper">
<form>
    <p>Enter: <input required="required" min="0" max="100" name="number" type="number" placeholder="Your Number">
    <button type="submit">GO</button>
    </p>
</form>
    <hr>
    <?php
    for($row=1; $row<=$number; $row++){
    $num = $number / 2;
    if ($row <= $num){
        echo "<div class=\"ball ball1\">$row</div>";
    }else{
        echo "<div class=\"ball ball2\">$row</div>";
    }


    }
    ?>

</div>

<style>

    .ball1{
        background-color: red !important;
    }

    .ball2{
        background-color: #072eba !important;
    }

    .ball{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #94941d;
        border: 1px solid darkred;
        text-align: center;
        line-height: 45px;
        font-size: 140%;
        display: inline-block;
        margin: 5px;
    }

    body{
        background-color: #2c2c2c;
    }
    #wrapper{
        padding-top:10px;
        width: 80%;
        margin: auto;
        background-color: lightgrey;
        text-align: center;
    }
</style>

</body>
</html>