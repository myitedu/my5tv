<?php
session_start();
$is_session_active = $_SESSION['is_user_logged_in']??null;
if (!$is_session_active){
    function redirect($msg = null, $url, $error = 1)
    {
        header("Location: $url?error=$error&msg=$msg");
        exit($msg);
    }
    redirect("You are not authorized to display this page", 'login.php', 1);
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
<nav>
    <a href="logout.php">Logout</a>
</nav>
<img src="https://beta.techcrunch.com/wp-content/uploads/2010/12/fbprofile3.png">

<style>

    nav{
        text-align: right;
    }

    body img{
        width: 100%;
    }
</style>
</body>
</html>