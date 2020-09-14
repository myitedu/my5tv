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
$left_pos = 200;
$top_pos = 200;

$top = $_GET['top']??"200";
$bottom = $_GET['bottom']??"200";
$left = $_GET['left']??"200";
$right = $_GET['right']??"200";
$left_pos += $left;
$top_pos += $top;
?>
<form class="myform">
    <p>
        Left Direction:
        <select class="myform" name="left">
            <option value="20">20px</option>
            <option value="40">40px</option>
            <option value="60">60px</option>
            <option value="80">80px</option>
            <option value="100">100px</option>
        </select>
    </p>

    <p>
        Right Direction:
        <select name="right">
            <option value="20">20px</option>
            <option value="40">40px</option>
            <option value="60">60px</option>
            <option value="80">80px</option>
            <option value="100">100px</option>
        </select>
    </p>

    <p>
        Top Direction:
        <select name="top">
            <option value="20">20px</option>
            <option value="40">40px</option>
            <option value="60">60px</option>
            <option value="80">80px</option>
            <option value="100">100px</option>
        </select>
    </p>

    <p>
        Bottom Direction:
        <select name="bottom">
            <option value="20">20px</option>
            <option value="40">40px</option>
            <option value="60">60px</option>
            <option value="80">80px</option>
            <option value="100">100px</option>
        </select>
    </p>

    <p>
        <button type="submit">MOVE</button>
    </p>
</form>

<hr>
<div class="mybox">BOX</div>

<style>

    #myform{

    }
    .myform{

    }

    .mybox{
        width: 100px;
        height: 100px;
        background-color: red;
        color: white;
        border: 2px solid black;
        position: absolute;
        top: <?php echo $top_pos?>px;
        left: <?php echo $left_pos?>px;
        text-align: center;
        line-height: 80px;
        font-size: 30px;
    }
</style>

</body>
</html>
