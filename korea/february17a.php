<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include "mynav.php";?>
<div id="mywrapper">
    <?php
    if (!file_exists("myheader.php")) {
        require "myheader_backup.php";
    }else{
        require "myheader.php";
    }
    ?>
    <div id="content">
        <h4>Contact Us</h4>
        <img style="width: 100%" src="https://cdn.searchenginejournal.com/wp-content/uploads/2020/08/contact-us-page-leeds-golf-centre-5f4449d90d441.png">
    </div>
    <?php include "myfooter.php";?>
</div>
</body>
</html>