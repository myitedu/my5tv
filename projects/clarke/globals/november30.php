<?php
date_default_timezone_set("America/New_York");
?>
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
$name = $_COOKIE['name']??null;
$last_time_your_were_here = $_COOKIE['last_time_your_were_here']??null;
?>
<h3>Welcome to November 30 File</h3>
<hr>
<p>Welcome, <?php echo $name;?></p>
<hr>
Last time you were here was <?php echo $last_time_your_were_here;?>
<hr>
<nav>
    <a href="november30.php">HOME</a> |
    <a href="november28.php">November 28</a>
</nav>
</body>
</html>
