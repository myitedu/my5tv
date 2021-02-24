<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About US</title>
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
    <h4>About Us</h4>
    <img style="width: 100%" src="https://cdn.searchenginejournal.com/wp-content/uploads/2019/01/Top-10-Ranking-About-Us-Pages.png">
</div>
    <?php include "myfooter.php";?>
</div>
</body>
</html>