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
require_once "database.php";
$db = new \Database\database("myitedu");
$card_id = $_GET['card']??1;
$card_id = (int) $card_id;
$sql = "SELECT * FROM business_cards WHERE id = $card_id limit 1;";
$data = $db->sql($sql);
$businesscard = $data[0];
?>
<div class="container-fluid">
<div id="businesscard">
    <div id="left_col">
        <h4>Update</h4>
        <hr>
        Company Name:<br>
        <input class="myinput inp_company_name" value="<?php echo $businesscard['company_name'];?>"><br>
        Full Name:<br>
       <input class="myinput inp_full_name"  value="<?php echo $businesscard['full_name'];?>"><br>
       Title: <br>
        <input class="myinput inp_title"  value="<?php echo $businesscard['title'];?>"><br>
       Phone <br>
        <input class="myinput inp_phone"  value="<?php echo $businesscard['phone'];?>"><br>

        Email <br>
        <input class="myinput inp_email"  value="<?php echo $businesscard['email'];?>"><br>

        Website <br>
        <input class="myinput inp_website"  value="<?php echo $businesscard['website'];?>"><br>

        Location <br>
        <input class="myinput inp_location" id="location" value="<?php echo $businesscard['location'];?>"><br>

        Logo <br>
        <input type="file" formenctype="multipart/form-data" class="myinput" id="logo"><br>
        <hr>
    </div>
    <div id="right_col">
        <div class="businesscard_place">
            <span class="full_name"><?php echo $businesscard['full_name'];?></span>
            <span class="title"><?php echo $businesscard['title'];?></span>
            <span class="phone"><?php echo $businesscard['phone'];?></span>
            <span class="email"><?php echo $businesscard['email'];?></span>
            <span class="website"><?php echo $businesscard['website'];?></span>
            <span class="location"><?php echo $businesscard['location'];?></span>
            <img class="logo" src="https://www.fiandbecs.com/_imgstore/3/4010243423/page_shop-logos-prints_15_11_mainimage/ss53TDop6hg10usOPdpixv3NGQc.png">
            <span class="company"><?php echo $businesscard['company_name'];?></span>
        </div>
        <img src="img/business_card_sample_bg.png">

        <div id="buttons">
            <input type="hidden" id="bid" value="<?php echo $businesscard['id'];?>">
            <button class="btn btn-info">SHARE</button>
            <button id="btn_save" class="btn btn-success">SAVE</button>
            <button class="btn btn-dark">EXPORT</button>
            <button class="btn btn-danger">DELETE</button>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>


<script>
    $(function (){
        $(".inp_company_name").keyup(function (){
            let value = $(this).val();
            $(".company").html(value);
        });
        $(".inp_full_name").keyup(function (){
            let value = $(this).val();
            $(".full_name").html(value);
        });
        $(".inp_title").keyup(function (){
            let value = $(this).val();
            $(".title").html(value);
        });
        $(".inp_phone").keyup(function (){
            let value = $(this).val();
            $(".phone").html(value);
        });
        $(".inp_email").keyup(function (){
            let value = $(this).val();
            $(".email").html(value);
        });
        $(".inp_website").keyup(function (){
            let value = $(this).val();
            $(".website").html(value);
        });
        $(".inp_location").keyup(function (){
            let value = $(this).val();
            $(".location").html(value);
        });

        $(document).on('click','#btn_save',function(){
            let company_namne = $(".inp_company_name").val();
            let full_name = $(".inp_full_name").val();
            let title = $(".inp_title").val();
            let phone = $(".inp_phone").val();
            let email = $(".inp_email").val();
            let website = $(".inp_website").val();
            let location = $(".inp_location").val();
            let bid = $("#bid").val();

            let data = {
                'id':bid,
                'company_name': company_namne,
                'full_name': full_name,
                'title': title,
                'phone': phone,
                'email': email,
                'website': website,
                'location': location,
            };
            $.post('save.php', data, function (response){
                console.log(response);
            });
        });


    });
</script>
<style>
    #buttons{
        position: relative;
        top: -300px;
        text-align: center;
        width: 100%;
        background-color: #2924b1;
        padding: 20px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
    }
    hr{
        background-color: #0d0960;
    }
.myinput{
    width: 90%;
    margin-bottom: 20px;
    border-radius: 10px;
    padding:3px;
}
    .logo{
        color: darkred;
        position: absolute !important;
        left: 380px !important;
        top: -155px !important;
        width: 100px !important;
    }
    .location{
        font-size: 16px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 105px;
        top: 266px;
    }
    .website{
        font-size: 16px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 105px;
        top: 217px;
    }
    .email{
        font-size: 16px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 105px;
        top: 170px;
    }
    .phone{
        font-size: 16px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 105px;
        top: 133px;
    }
    .title{
        font-size: 16px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 49px;
        top: 71px;
    }
    .company{
        font-size: 20px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 480px;
        top: 52px;
    }
    .full_name{
        font-size: 30px;
        font-weight: bolder;
        color: darkred;
        position: absolute;
        left: 48px;
        top: 35px;
    }
    .businesscard_place{
        width: 659px;
        height: 377px;
        position: relative;
        left: 17px;
        top: 199px;

        z-index: 100;
    }
    #right_col img{
        width: 95%;
        margin-top: 175px;
        z-index: 10;
        position: relative;
        top: -353px;
    }
    #right_col{
        width: 70%;
        height: 100%;
        display: inline-block;
        float: right;
        background-color: #3833c8;
        text-align: center;
    }
    #left_col{
        width: 30%;
        height: 100%;
        display: inline-block;
        float: left;
        background-color: #00c882;
        text-align: center;
    }

#businesscard{
    width: 1000px;
    height: 800px;
    background-color: lightgrey;
    border: 1px solid black;
    margin: 20px auto;
    padding:3px;
}
</style>

</body>
</html>