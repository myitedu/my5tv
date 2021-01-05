<?php
session_start();
$user_logged_on = $_SESSION['user_logged_on']??null;
if ($user_logged_on !== 1){
    $msg = "You are not authorized to view this page";
    header("Location: index.php?error=1&msg=".$msg);
    exit($msg);
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
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<h1>Members area</h1>
<hr>
<nav>
    <a href="account.php">HOME</a> | <a href="logout.php">Logout</a>
</nav>
<img src="https://upload.wikimedia.org/wikipedia/commons/c/cb/BankStatementChequing.png">
<style>
    img{
        width: 100%;
    }
</style>
</body>
</html>