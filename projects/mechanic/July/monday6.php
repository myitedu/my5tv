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
<div class="container-fluid">

 <nav>
     <a href="thursday9.php?color=white"> White </a>
     <a href="thursday9.php?color=blue"> Blue </a>
     <a href="thursday9.php?color=green"> Green </a>
     <a href="thursday9.php?color=yellow"> Yellow </a>
     <a href="thursday9.php?color=brown"> Brown </a>
 </nav>


</div>

<?php
$color = $_COOKIE['color']??'white';
?>

<style>
    body{
        background-color: <?php echo $color?> ;
    }
</style>
</body>
</html>