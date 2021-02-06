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
$numbers = range(1, 10000);

foreach ($numbers as $number){
    if ($number%2===0){
        echo "<div class='even_numbers'>$number</div>";
    }else{
        echo "<div class='odd_numbers'>$number</div>";
    }

}
?>

<style>
    .even_numbers{
        color: red;
        background-color: yellow;
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        width: auto;
        text-align: center;
        display: inline-block;
    }
    .odd_numbers{
        color: #f3e188;
        background-color: #1717ee;
        padding: 5px;
        margin: 5px;
        border: 1px solid black;
        width: auto;
        text-align: center;
        display: inline-block;
    }
</style>


</body>
</html>