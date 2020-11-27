<?php
session_start();
$is_user_logged_on = $_SESSION['is_user_logged_on']??false;
if (!$is_user_logged_on){
    header("Location:login.php?error=1&msg=The user is not authorized to login");
    exit;
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
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<div id="buttons">
    <a btn btn-danger href="logout.php">Logout</a>
</div>
 <img id="statement" src="https://upload.wikimedia.org/wikipedia/commons/c/cb/BankStatementChequing.png">

 <style>
     #buttons{
         width: 200px;
         float: right;
     }
     #statement{
         width: 100%;
     }
 </style>

</body>
</html>