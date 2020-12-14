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
<?php
$msg = $_GET['msg']??null;
?>
<div class="container-fluid">
    <h5>Members Login</h5>
    <div id="login">
        <?php
        if ($msg){
        echo "<div class=\"alert alert-danger\">$msg</div>";
        }
        ?>
        <form method="post" action="loginform.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input required="required" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input required="required" name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<style>
body{
    background-color: #032f37;
}
    #login{
        width: 700px;
        margin: auto;
        border: 1px solid black;
        background-color: #efe6e6;
        padding: 10px;
    }
    h5{
        color: lightblue;
    }
    .container-fluid{
        text-align: center;

    }
</style>
</body>
</html>