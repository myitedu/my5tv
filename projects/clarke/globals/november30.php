<?php
session_start();
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
echo $_SESSION['city'];
echo "<hr>";
echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

?>
<h3>Welcome to November 30 File</h3>

<nav>
    <a href="november30.php">HOME</a> |
    <a href="november28.php">November 28</a>
</nav>
</body>
</html>
