<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div id="scoreboard">
    <span id="total_attempt">0</span>
    <span id="total_score">0</span>
</div>
<div id="game">

    <img id="congratulations_icon" src="https://i2.wp.com/www.austenauthors.net/wp-content/uploads/2017/08/winner-stars.png?fit=400%2C300&ssl=1&w=640">

    <script>
            for(let i=1; i<105; i++){
                document.write("<div class=\"box\">"+i+"</div>");
            }
    </script>



</div>

<div id="game_conditions">
    Attempts: <span id="required_attempts">3</span>
    Score: <span id="required_score">100</span>
</div>

<style>
    #congratulations_icon{
        position: absolute;
        top: 220px;
        left: 280px;
        z-index: 100;
        display: none;
    }
    #required_attempts{
       padding: 5px;
    }
    #required_score{
        width: 50px;
        padding: 5px;
    }
    #game_conditions{
        background-color: #0a53be;
        color: white;
        width: 80%;
        margin: 20px auto;
        height: 50px;
        border-radius: 20px;
        border: 3px solid darkred;
        text-align: center;
    }
    #total_attempt{
        position: relative;
        top: 42px;
        left: -12px;
        font-size: 20px;
    }
    #total_score{
        position: relative;
        top: 42px;
        left: 12px;
        font-size: 20px;
    }
    #scoreboard{
        width: 120px;
        height: 110px;
        margin: auto;
        text-align: center;
        background-image: url("img/scoreboard.png");
        background-size: 100% 100%;
    }
    .box_selected{
        background-color: black !important;
        color: gold !important;
    }
    .box:hover{
        background-color: black;
        color: gold;
        cursor: pointer;
    }
    .box{
        width: 40px;
        height: 40px;
        background-color: #0a53be;
        color: white;
        font-size: 20px;
        text-align: center;
        margin: 10px;
        display: inline-block;
    }
    #game{
        width: 800px;
        height: auto;
        background-color: lightgrey;
        margin: 5px auto;
        text-align: center;
    }
</style>

<script>
    $(function () {

        let required_attempts = Math.floor(Math.random() * 10) + 1
        let required_score = Math.floor(Math.random() * 100) + 11
        $("#required_attempts").text(required_attempts);
        $("#required_score").text(required_score);

        let counter = 0;
        let total = 0;
        $(".box").click(function () {
            counter++;

            if (counter>required_attempts){
                alert("DING DING");
            }

            $("#total_attempt").text(counter);
            let number = $(this).text();
            total = eval(total+"+"+number);
            $("#total_score").text(total);

            if (total==required_score){
                $("#congratulations_icon").fadeIn('slow');
            }

            $(this).addClass("box_selected");
        });
    });
</script>

</body>
</html>
