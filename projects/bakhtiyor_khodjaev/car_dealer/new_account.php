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
</head>
<body>

<div id="baha_container">
    <div class="newaccount">
        <div id="topheader"></div>
        <div class="middleheader">
            <p>Sign Up for New Account</p>
        </div>
        <div class="accountform">
            <table>
                <tr>
                    <td><input placeholder="First name" type="text" name="first name"></td>
                    <td><input placeholder="Last name" type="text" name="last name"></td>
                </tr>
                <tr>
                    <td colspan="2" class="email"><input placeholder="Email Address" type="email" name="email address"></td>
                </tr>
                <tr>
                    <td colspan="2" class="password"><input placeholder="Password" type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2" class="confirmpassword"><input placeholder="Confirm Password" type="password" name="confirm password"></td>
                </tr>
                <tr>
                    <td colspan="2" class="links">
                        <a href="#">Forgot Password?</a>  | <a href="login.php">Log In</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="button">
                        <button class="btn btn-danger" type="submit">Sign Up</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<style>
    .links{
        text-align: left;
        padding: 0px;
        padding-left: 55px
    }
    .button{
        text-align: center;
        padding-top: 20px;
    }
    .confirmpassword{
        text-align: left;
        padding: 30px;
        padding-left: 55px
    }
    .password{
        text-align: left;
        padding: -5px;
        padding-left: 55px
    }
    .email{
        text-align: left;
        padding: 30px;
        padding-left: 55px;
    }
    body{
        background-image: url("https://i.ytimg.com/vi/lpN_bdqTYNU/maxresdefault.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
    }
    .accountform input{
        border: none;
        border-bottom: 1px solid black;
    }
    .accountform table{
        margin: auto;
        width: 70%;
        padding: 50px;
    }
    .accountform{
        text-align: center;
    }
    .middleheader{
        margin-top: 20px;
    }
    .middleheader p{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
    }
    .newaccount{
        width: 800px;
        height: 600px;
        margin: 100px auto;
        background-color: white;
        opacity: 0.8!important;
        border-radius: 10px;
    }
    #topheader{
        width: 100%;
        height: 200px;
        background-image: url("https://pngimage.net/wp-content/uploads/2018/06/used-car-dealers-in-png-2.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
</style>

</body>
</html>
