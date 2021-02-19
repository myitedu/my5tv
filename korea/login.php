<?php
session_start();
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
$email =  $_POST['email']??null;
$password =  $_POST['password']??null;
$msg = null;
$_SESSION['is_user_logged_in'] = null;

if (!empty($email) && !empty($password)){
    if ($email=='jon@jon.com' && $password =='abc123'){
        $_SESSION['is_user_logged_in'] = 1;
        header("Location: members.php");
        exit;
    }else{
        $msg = 'Your username or password is incorrect';
    }
}


?>
<form method="post">
    <h5>Login Form</h5>
    <div><?=$msg?></div>
    <input name="email" type="email" placeholder="Your email"><br>
    <input name="password" type="password" placeholder="Your Password"><br>
    <button type="submit">Login</button>
</form>
</body>
</html>