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

<div id="mymobile">
    <div data-source="youtube" class="buttons youtube_button"></div>
    <div data-source="chrome"  class="buttons chrome_button"></div>
    <div data-source="close"  class="buttons close_button"></div>
    <div data-source="calculator"  class="buttons calculator_button"></div>

    <img src="/img/tablet.png">

    <video id="video_player" controls>
        <source src="/video/jontoshmatov_gym.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div id="mywindow">

    </div>
</div>


<script>
    $(function(){
       $(".buttons").click(function (){
           let source = $(this).data("source");
          if (source == 'youtube'){
              $("#video_player").fadeIn("slow").trigger('play');
              $("#mywindow").fadeIn('fast').css("background-color",'white').empty();
          }
           if (source == 'chrome'){
               $("#video_player").fadeOut("slow").trigger('pause');
               $("#mywindow").fadeIn('slow').load("chrome.php");
           }
           if (source == 'close'){
               $("#video_player").fadeOut("slow").trigger('pause');
               $("#mywindow").fadeOut('slow');
           }

           if (source == 'calculator'){
               let img = "<img class=\"calculator\" src=\"https://banner2.cleanpng.com/20180421/cgq/kisspng-iphone-5-calculator-screenshot-macbook-apple-calculator-5adbf3dfca5d53.6964296115243642558289.jpg\">";
               $("#mywindow").fadeIn('fast').css("background-color",'white').empty().html(img);
           }


           return false;
       });
    });
</script>


<style>

    .calculator{

    }

    #mywindow{
        width: 460px;
        height: 717px;
        margin: auto;
        text-align: center;
        position: absolute;
        top: 417px;
        left: 589px;
        display: none;
        background-color: #0c5460;
        z-index: 10;
        overflow: auto;
    }

    #video_player{
        position: relative;
        top: -785px;
        left: -3px;
        width: 58%;
        display: none;
        z-index: 20;
    }

    .calculator_button{
        left: 190px;
        top: 184px;

        z-index: 1000;
    }

    .close_button{
        left: 370px;
        top: 913px;
        z-index: 999;
    }

    .chrome_button{
        left: 370px;
        top: 686px;
        z-index: 998;
    }

    .youtube_button{
        left: 190px;
        top: 869px;
        z-index: 997;
    }

    .buttons{
        width: 70px;
        height: 90px;
        position: relative;
        cursor: pointer;
    }

    #mymobile img{
        width: 70%;
    }
    #mymobile{
        width: 800px;
        margin: auto;
        text-align: center;
    }
    body{
        background-color: #546e7a;
    }
</style>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>