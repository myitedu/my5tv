<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
$msg = $_GET['msg']??null;
?>
<div class="container-fluid">
    <form method="POST" action="february13a.php">
        <?php
        if (!empty($msg)){
        ?>
        <p>
            <div class="alert alert-danger">
                    <?php echo $msg;?>
            </div>
        </p>
        <?php
        }
        ?>
        <p><h5>My Login Form </h5></p>
        <p>Email: <input  name="email" type="email" placeholder="Your Email"></p>
        <p>Password: <input  name="password" type="password" placeholder="Your Password"></p>
        <p><button type="submit">LOGIN</button></p>
    </form>
</div>
<?php
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
 */
 ?>
</body>
</html>