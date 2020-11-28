<?php
session_start();
date_default_timezone_set("America/New_York");
$_SESSION['city'] = "New York";
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
$name = "Jessica";
//function setcookie ($name, $value = "", $expire = 0, $path = "", $domain = "", $secure = false, $httponly = false) {}
setcookie("name",$name, time()+10);
$last_stamp = date("Y-m-d h:i:s A E");
setcookie("last_time_your_were_here",$last_stamp, time()+3600);
?>
<h3>Welcome to November 28 File</h3>
<hr>
<p>Welcome, <?php echo $name;?></p>
<hr>
<nav>
    <a href="november28.php">HOME</a>  |
    <a href="november30.php">November 30</a>
</nav>
</body>
</html>
