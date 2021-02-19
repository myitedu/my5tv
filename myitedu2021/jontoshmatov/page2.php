<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
<?php
$color = $_COOKIE['color']??'blue';
?>
<h4>Page 2</h4>
<hr>
You have selected the color: <?=$color;?>
<hr>


<a href="page2.php">Page 2</a>   |
<a href="page1.php">Page 1</a>
</body>
</html>