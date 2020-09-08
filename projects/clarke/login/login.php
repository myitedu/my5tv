<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/facebook.css">
</head>
<body>
<?php
$error = $_GET['error']??0;
$msg = $_GET['msg']??null;
echo password_hash('business', PASSWORD_BCRYPT)
?>
<div class="container-fluid">
    <div id="login_form">
        <?php
        if ($error==0){
            ?>
            <div class="alert alert-success">
                <?php
                echo $msg;
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        if ($error==1){
        ?>
        <div class="alert alert-danger">
            <?php
            echo $msg;
            ?>
        </div>
        <?php
            }
        ?>
        <?php
        if ($error==2){
            ?>
            <div class="alert alert-info">
                <?php
                echo $msg;
                ?>
            </div>
            <?php
        }
        ?>
        <form method="post" action="backend.php">
            <p><input name="username" type="email" placeholder="Your email"></p>
            <p><input name="password" type="password" placeholder="Your Password"></p>
            <p><button class="btn btn-info btn_login">LOGIN</button></p>
            <p><a href="#">Forgot Password</a> </p>
            <hr>
            <p><button class="btn btn-info btn_signup">Create New Account</button></p>
        </form>
    </div>
</div>
</body>
</html>