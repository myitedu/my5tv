<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mutahasis kasb egalari Formasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/october9.js"></script>
</head>
<body>
<?php
$display = "none";
$msg = null;
$specialist = $_GET['specialist']??null;
if ($specialist){
    $display='block';
}
?>
<div class="container-fluid">
<h2 class="title">All Specialists</h2>
  <div class="display">

      <h5>Information about: <span class="specialist_title"><?php echo $specialist; ?></span></h5>
      <img class="close_button" src="https://lh3.googleusercontent.com/proxy/LEg3pizEap_r-OuTi0wKP4XdFYPBF-IDXdSGXjG7MwpREScsSx00gTpco3o73jZk5QqdLZdJrnj1LWGhOr-0Q0urY4etUNVZZQ">
      <img class="cartoon" src="http://static.skaip.org/img/emoticons/180x180/f6fcff/manshrug.gif">

      <iframe class="myiframe" src="https://en.wikipedia.org/wiki/<?php echo $specialist; ?>"></iframe>

  </div>
  <div class="box government">President</div>
  <div class="box actors">Actors</div>
  <div class="box taxi_driver">Drivers</div>
  <div class="box doctors">Doctors</div>
  <div class="box others">Other</div>
  <div class="box programmers">Programmers</div>
  <div class="box steward">Stewards</div>
  <div class="box special_force">Army</div>
</div>
<style>
    .specialist_title{
        color: #921515;
        font-weight: bolder;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .cartoon{
        width: 162px;
        position: absolute;
        left: 6px;
        top: 40px;
        cursor: pointer;
    }
    .close_button{
        width: 50px;
        position: absolute;
        right: 10px;
        top: 5px;
        cursor: pointer;
    }
    .myiframe{
        width: 100%;
        height: 300px;
        overflow: auto;
    }
    .display{
        width: 70%;
        height: auto;
        margin: auto;
        border: 5px double #010f43;
        background-color: lightgrey;
        position: absolute;
        top: 180px;
        left: 140px;
        z-index: 100;
        display: <?php echo $display;?>;
        border-radius: 20px;
        padding: 5px;
    }
    .title{
        color: #baffa4;
        text-shadow: 2px 2px #05185b;
        font-weight: bolder;
        font-family: "Arial Rounded MT Bold"
    }

    .container-fluid{
        text-align: center;
    }

    .special_force{
        background-image: url("https://lh3.googleusercontent.com/proxy/bFm0mwhm28ZXa8z7FuwRjOILzk0pQ4NarIvC72Xuqu1IJ_fqq36GI2oUmOVFfovb8_9QXpX3bYm68EZ4iZ7sSVUpYaPk3rY20-hnHBDbmjSwr4MpgpW4z9FEbdfA1f_DMW6AzhTMnvWaVEEkcD5BIJxcve1N");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .steward{
        background-image: url("https://i.pinimg.com/originals/e1/75/00/e17500ffd5c206a4f12bd0f1a08f2e78.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .programmers{
        background-image: url("https://cdn.techinasia.com/wp-content/uploads/2017/06/11512594484_0e24c9b0b0_k-750x563.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .others{
        background-image: url("https://ei.marketwatch.com/Multimedia/2019/06/26/Photos/ZQ/MW-HM263_hongko_20190626141607_ZQ.jpg?uuid=77a25664-983e-11e9-8d8f-9c8e992d421e");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .doctors{
        background-image: url("https://static01.nyt.com/images/2020/03/18/well/doctors-mask/doctors-mask-videoSixteenByNineJumbo1600.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .taxi_driver{
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/f/f6/Cabs.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .actors{
        background-image: url("https://image.shutterstock.com/image-vector/online-cinema-art-movie-watching-260nw-586719869.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .government{
        background-image: url("https://secure-cdn.scdn6.secure.raxcdn.com/media/userfiles/subsite_155/images/Government-Market-Report-2009-2014.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .box:hover{
        opacity: 1.0;
        cursor: pointer;
        border: 4px dotted #850101;
    }
    .box{
        width: 250px;
        height: 250px;
        border: 4px double #02214f;
        background-color: #9b538b;
        display: inline-block;
        padding: 2px;
        margin: 10px;
        border-radius: 50%;
        text-align: center;
        line-height: 245px;
        color: yellow;
        font-size: 150%;
        box-shadow: 5px 5px 5px 5px #00001f;
        text-shadow: 2px 2px #05185b;
        font-weight: bolder;
        font-family: "Lucida Handwriting";
        opacity: 0.8;
    }
    body{
        background-color: rgb(0, 0, 0);
        background-image: url("https://htmlcolors.com/gradients-images/55-dark-blue-gradient.jpg");
    }
</style>
</body>
</html>