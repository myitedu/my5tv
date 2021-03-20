<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/facebook.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/facebook.js"></script>
</head>
<body>
<?php
$msg = $_GET['msg']??null;
?>
<div id="login">
    <div class="form_title">Members Login Page</div>
    <form method="post" action="process_login.php">
        <hr>
        <?php if (!empty($msg)):?>
            <div class="alert alert-danger"><?=$msg?></div>
        <?php endif;?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input required name="username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input required name="password" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form_buttons">
            <button type="reset" class="btn btn-dark">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
</body>
</html>