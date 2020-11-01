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
<h1>Welcome to our site!</h1>

<hr>
<?php
$cookie = $_COOKIE['sunnat']??'Programmer';
echo $cookie;
?>
<hr>


<nav>
    <a href="setcookie.php">Set Cookie</a>  &nbsp;   | &nbsp;
    <a href="getcookie.php">Get Cookie</a>
</nav>

</body>
</html>
