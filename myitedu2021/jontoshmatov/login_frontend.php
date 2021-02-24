<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div id="myform">
        <form method="post" action="login_backend.php">
            <h4>Login Form</h4>
            <hr>
            <p>
                Email: <br><input  name="email" type="email" placeholder="Your Email">
            </p>
            <p>
                Password: <br><input  name="password" type="password" placeholder="Your Password">
            </p>
            <p>
                <button type="reset">Reset</button>
                <button type="submit">Login</button>
            </p>
        </form>
    </div>

</div>

<style>
    #myform{
        width: 400px;
        height: auto;
        background-color: #0b7fa8;
        color: white;
        padding: 5px;
        margin: 100px auto;
        border: 1px solid black;
        border-radius: 10px;
        text-align: center;
    }
</style>

</body>
</html>