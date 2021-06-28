<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/june27.js"></script>

</head>
<body>
<?php
$parms = $_POST??[];
echo "<pre>";
print_r($parms);
echo "</pre>";
?>
<form method="post">
<div id="dmv">
<input required="required" name="full_name" class="inp_full_name">
    <input class="inp_gender_male" type="checkbox" name="gender" value="male">
    <input class="inp_gender_female" type="checkbox" name="gender" value="female">
    <input type="text" name="dr_number" class="ny_dr_number1">
    <input type="text" name="dr_number2" class="ny_dr_number2">
    <input type="text" name="dr_number3" class="ny_dr_number3">
    <input type="text" name="dr_number4" class="ny_dr_number4">

    <button id="btn_submit">Submit</button>
</div>
</form>


<style>
    #btn_submit{
        position: relative;
        top: 1340px;
        left: -461px;
    }
    .ny_dr_number4{
        width: 19px;
        height: 20px;
        position: relative;
        right: 658px;
        top: 388px;
    }
    .ny_dr_number3{
        width: 19px;
        height: 20px;
        position: relative;
        right: 654px;
        top: 388px;
    }
    .ny_dr_number2{
        width: 19px;
        height: 20px;
        position: relative;
        right: 650px;
        top: 388px;
    }

    .ny_dr_number1{
        width: 19px;
        height: 20px;
        position: relative;
        right: 646px;
        top: 388px;
    }

    .inp_gender_male{
        position: relative;
        left: -35px;
        top: 307px;
    }

    .inp_gender_female{
        position: relative;
        left: 1px;
        top: 307px;
    }
    .inp_full_name{
        width: 750px;
        position: relative;
        top: 260px;
        left: 129px;
        height: 24px;
    }

    #dmv{
        width: 1000px;
        height: 1500px;
        margin: 50px auto;
        background-image: url("https://emilyfrebowitz.com/wp-content/uploads/2019/01/ogdmvform-bg.jpg");
        background-size: 100% 100%;
    }
</style>

</body>
</html>