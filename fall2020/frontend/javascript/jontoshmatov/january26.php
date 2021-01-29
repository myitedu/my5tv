<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="../js/january26.js"></script>
</head>
<body>
<div class="container-fluid">
    <form id="myform" method="post">
        <div id="myalert" class="alert alert-danger">Your message</div>
        <table class="table table-bordered">
            <tr><td colspan="2"><h3>Contact Form</h3></td></tr>
            <tr><td>First Name:</td><td><input name="first_name" type="text" placeholder="First Name"><i id="check_first_name" class="mycheck_mark">&check;</i></td></tr>
            <tr><td>Last Name:</td><td><input name="last_name" type="text" placeholder="Last Name"><i id="check_last_name" class="mycheck_mark">&check;</i></td></tr>
            <tr><td>Email:</td><td><input required="required" name="email" type="email" placeholder="Email Address"><i id="check_email" class="mycheck_mark">&check;</i></td></tr>
            <tr><td>Password:</td><td><input required="required" name="password" type="password" placeholder="Your Password"><i id="check_passsword" class="mycheck_mark">&check;</i>
                    <img id="show_password" src="https://cdn3.iconfinder.com/data/icons/eyes-6/32/Eye_Close_Hide_Invisible__Password_eye-512.png">
                </td></tr>
            <tr><td>Phone:</td><td><input required="required" name="phone" type="tel" placeholder="(123) 456-7890"><i id="check_phone" class="mycheck_mark">&check;</i></td></tr>
            <tr><td>Message:</td><td><textarea name="message" placeholder="Your Message"></textarea></td></tr>
            <tr><td colspan="2"><button class="btn btn-dark" type="reset">Reset</button> <button id="btn_submit" type="submit" class="btn btn-success">Submit</button></td></tr>
        </table>
    </form>
</div>
<!--
https://cdn3.iconfinder.com/data/icons/eyes-6/32/Eye_Close_Hide_Invisible__Password_eye-512.png
https://static.thenounproject.com/png/3258936-200.png
-->

<style>

    #show_password{
        width: 26px;
        cursor: pointer;
    }

    .mycheck_mark_failed{
        color: #e20808;
        font-weight: bolder;
        font-size: 25px;
        display: none;
    }
    .mycheck_mark{
        color: green;
        font-weight: bolder;
        font-size: 25px;
        display: none;
    }

    tr:first-child td, tr:last-child td{
        text-align: center;
    }
    table{
        background-color: #e4f0f5;
    }
    body{
        background-color: #0b2560;
    }
    .container-fluid{
        margin-top: 50px;
        border-radius: 20px;
        border: 1px solid black;
        padding: 10px;
        background-color: #ccdde0;
    }
    .alert{
        border-radius: 14px ;
        display: none;
    }
</style>

</body>
</html>