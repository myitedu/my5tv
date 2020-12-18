<?php
session_start();
$is_user_logged_in = $_SESSION['is_user_logged_in']??false;
if (!$is_user_logged_in){
    header("Location: login.php?msg=You are not logged in");
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
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<h1 style="text-align: center">Welcome to Sunat Mechanic!</h1>
<nav style="text-align: center">
    <a id="loggin_btn" href="login.php">Login</a> &nbsp; | &nbsp;
    <a href="../facebook">Profile</a> &nbsp; | &nbsp;
    <a id="logout_btn" href="logout.php">Logout</a> &nbsp; | &nbsp;
</nav>

<img src="https://4.bp.blogspot.com/-SlifBVtaVMQ/UjVNr5J5eHI/AAAAAAAAAck/GDRQlDAziHU/s1600/newzuckprofile.jpg">
<style>
    img{
        width: 100%;
    }
</style>

<script>

    $( document ).ready(function() {
        $("#logout_btn").click(function () {
            if (confirm("Are you sure you want to logout?")){
                return true
            }else{
                return false;
            }
        });

        $("#loggin_btn").click(function () {
            if (confirm("You are already loggedin \n Do you want to go to login page?")){
                return true
            }else{
                return false;
            }
        });

    })
</script>


</body>
</html>