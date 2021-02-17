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
$name = 'BIGBOY';
?>
<?php include "left.php";?>
<?php include "middle.php";?>
<?php include "right.php";?>
<style>
    .mydivs{
        display: inline-block;
        height: 400px;
        overflow: auto;
    }
    .left_col{
        background-color: red;
        width: 33%;
    }
    .middle_col{
        background-color: green;
        width: 34%;
    }
    .right_col{
        background-color: blue;
        width: 33%;
    }
</style>
</body>
</html>