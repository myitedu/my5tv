<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$msg = $_GET['msg']??null;
?>
<div id="mywrapper">
    <h5 class="form_title">Sign up form</h5>
<form method="post" action="signup.php">
    <table>
        <?php if (!empty($msg)):?>
        <tr>
            <td class="td_error" colspan="2">
                <div class="alert alert-danger">
                    <?=$msg;?>
                </div>
            </td>
        </tr>
        <?php endif;?>
        <tr>
            <td>First Name:</td>
            <td><input name="first_name" placeholder="Your First Name" type="text"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input name="last_name" placeholder="Your Last Name" type="text"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" placeholder="Your Email Address" type="email"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input value="" name="age" placeholder="Your Age" type="number"></td>
        </tr>
        <tr>
            <td class="form_buttons" colspan="2">
                <button class="btn btn-dark" type="reset">Reset</button>
                <button class="btn btn-success" type="submit">Sign Up</button>
            </td>
        </tr>
    </table>
</form>
</div>
</body>
</html>