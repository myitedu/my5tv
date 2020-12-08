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
<div class="container-fluid" id="traffic_lights">
    <img id="colors_red" class="colors" src="/img/street_traffic_lights_colors_red.png">
    <img id="colors_yellow" class="colors" src="/img/street_traffic_lights_colors_yellow.png">
    <img id="colors_green" class="colors" src="/img/street_traffic_lights_colors_green.png">
</div>
<div id="btns">
    <button class="btn btn-success">ON</button>
</div>
<style>
    #colors_red{
        left: 247px;
        top: 170px;
        z-index: 103;
    }
    #colors_yellow{
        left: 136px;
        top: 297px;
        z-index: 102;
    }
    #colors_green{
        left: 22px;
        top: 437px;
        z-index: 101;
    }
    .colors{
        width: 117px;
        height: 100px;
        position: relative;
        visibility: hidden;

    }
    #btns{
        width: 620px;
        height: auto;
        margin: auto;
        border: 1px solid black;
        padding: 5px;
        text-align: center;
    }
    #traffic_lights{
        width: 620px;
        height: 680px;
        margin: auto;
        border: 1px solid black;
        background-image: url("/img/street_traffic_lights.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        z-index: 1;
    }
</style>
<script>
    $(function (){
        let current_light = "colors_red";
        $("#colors_red").css("visibility","visible");
        setInterval(switch_colors, 1000);

        let counter = 0;
        function switch_colors(){
            counter++;
            if (current_light=="colors_red" && (counter%12)===0){
                current_light = "colors_yellow";
                $("#colors_red").css("visibility","visible");
                $("#colors_yellow").css("visibility","hidden");
                $("#colors_green").css("visibility","hidden");
                console.log(counter);
                return false;
            }
            if (current_light=="colors_yellow" && (counter%3)===0){
                current_light = "colors_green";
                $("#colors_red").css("visibility","hidden");
                $("#colors_yellow").css("visibility","visible");
                $("#colors_green").css("visibility","hidden");
                return false;
            }
            if (current_light=="colors_green" && (counter%10)===0){
                current_light = "colors_red";
                $("#colors_red").css("visibility","hidden");
                $("#colors_yellow").css("visibility","hidden");
                $("#colors_green").css("visibility","visible");
                return false;
            }
        }



    });


</script>
</body>
</html>