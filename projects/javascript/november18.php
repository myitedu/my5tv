<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>

<div id="jon">
    <img id="light_bulb" src="/img/light_bulb_off.png">
</div>

<div id="buttons">
<button id="switch">ON</button>
</div>

<style>

    #light_bulb{
        width: 100%;
    }
    #buttons{
        width:400px;
        height: auto;
        border: 1px solid black;
        margin: 5px auto;
        padding:5px;
        text-align: center;
    }
    .jonclassopen{
        background-color: #00ff02;
    }
    .jonclassclose{
        background-color: #be0101;
    }
    #jon{
        width:400px;
        height:  auto;
        border: 1px solid black;
        margin: auto;
    }
</style>
<script>
$(function (){
     $("#switch").click(function (){
         let img = $("#light_bulb").attr("src");
         let btn_text = "ON";
         if (img == '/img/light_bulb_off.png'){
             img = "/img/light_bulb_on.png";
             btn_text = "OFF";
         }else{
             img = "/img/light_bulb_off.png";
             btn_text = "ON";
         }
         $("#light_bulb").attr("src", img);
         $(this).text(btn_text);

     });
});
</script>
</body>
</html>