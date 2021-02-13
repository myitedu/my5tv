<?php
session_start();

if (empty($_SESSION['is_user_logged_in'])){
    $msg = "GET OUT OF HERE!";
    header("Location: february13.php?msg=$msg");
}

if ($_SESSION['is_user_logged_in'] !=1){
    $msg = "You are not authorized to view this page!";
    header("Location: february13.php?msg=$msg");
}
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
<a href="logout.php">Logout</a>
<img style="width: 100%" src="https://techcrunch.com/wp-content/uploads/2010/12/profilepage.png">
</body>
</html>