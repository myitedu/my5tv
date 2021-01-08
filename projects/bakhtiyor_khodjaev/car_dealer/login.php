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
<?php
$error = $_GET['error']??0;
$msg = $_GET['msg']??null;
?>

<div class="container-fluid">
    <form method="post" action="backend.php">
        <div class="log_in">
            <div class="topheader"></div>
            <div class="middleheader">
                <p>Log In to Your Accounts</p>
            </div>

            <?php
            if($error){
            ?>

            <div class="myalert">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Ambox_warning_orange.svg/891px-Ambox_warning_orange.svg.png">

                <span>
                    <?php echo $msg; ?>
                </span>
            </div>

            <?php
            }
            ?>

            <div class="loginform">
                <table>
                    <tr>
                        <td><input placeholder="Username" type="text" name="username"></td>
                        <td><input placeholder="Password" type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td_save">
                            <input type="checkbox" name="save_username" value="1"> Save Username
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td_links">
                            <a href="#">Forgot Password?</a>  | <a href="new_account.php">Create New Account</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="td_button">
                            <button class="btn btn-danger" type="submit">Log In</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</div>

</body>

<style>
    .myalert img{
        width: 20px;
    }
    .myalert{
        width: 70%;
        text-align: center;
        border-radius: 10px;
        height: 30px;
        background-color: #eaa6b0;
        margin: 10px auto;
        font-size: 15px;
        font-family:Helvetica Neue, Helvetica, Arial, sans-serif;
        padding-top: 3px;
        color: darkred;
    }
    .td_button{
        text-align: center;
        padding-top: 30px;
    }
    .td_links{
        font-size: 12px;
        text-align: left;
        padding-left: 55px;
        padding-top: 0px;
    }
    .td_save{
        text-align: left;
        padding: 55px;
        padding-top: 20px;
        font-size: 12px;
    }
    .loginform input{
        border: none;
        border-bottom: 1px solid black;
    }
    .loginform table{
        margin: auto;
        width: 70%;
        padding: 20px;
    }
    .loginform{
        text-align: center;
    }
    .middleheader{
        margin-top: 70px;
    }
    .middleheader p{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
    }
    .topheader{
        width: 100%;
        height: 200px;
        background-image: url("https://pngimage.net/wp-content/uploads/2018/06/used-car-dealers-in-png-2.png");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-color: black;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    body{
        background-image: url("https://i.ytimg.com/vi/lpN_bdqTYNU/maxresdefault.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
    }
    .log_in{
        width: 800px;
        height: 600px;
        margin: 100px auto;
        background-color: #ffffffd1;
        border-radius: 10px;
    }

    input::placeholder{
        color: black;
        font-weight: bolder;
    }
</style>
</html>
