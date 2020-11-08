<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baha's Car Dealers</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jonjs.js"></script>
</head>
<body>
<?php include "phpcode.php"; ?>
<div class="joncontainer">
    <?php include "jonheader.php";?>
    <?php include "jonmenu.php";?>

    <div id="contactus">
        <img src="https://www.carscoops.com/wp-content/uploads/2019/04/f0a676c9-2002-mercedes-g-class-kahn-tuning-0-1024x555.jpg">
    </div>

    <?php include "jonmodal.php";?>
</div>
    <?php include "jonfooter.php";?>
<style>
    .navbar{
        background-color: <?php echo $navbar;?> !important;
    }
</style>
</body>
</html>
