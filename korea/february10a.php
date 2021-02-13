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
    $name = $_GET['name']??'Alex';
    $country = $_GET['country']??'Uzbekistan';
?>
<h3>Welcome to <?php echo strtoupper($country);?>, <?php echo $name;?>!</h3>
<hr>
<nav>
    <a href="february10.php">Page 1</a> |
    <a href="february10a.php">Page 2</a> |
</nav>

<style>
    body{
        background-color: #52e658;
    }
</style>
</body>
</html>