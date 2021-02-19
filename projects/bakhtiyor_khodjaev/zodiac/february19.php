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
<div class="father">
    <div class="row1">
        <div class="horoscope">1</div>
        <div class="horoscope">2</div>
        <div class="horoscope">3</div>
        <div class="horoscope">4</div>
        <div class="horoscope">5</div>
    </div>
    <div class="row2">
        <div class="horoscope horoscope_left">1</div>
        <div class="horoscope horoscope_right">2</div>
        <div class="clearfix"></div>
    </div>
    <div class="row3">
        <div class="horoscope">1</div>
        <div class="horoscope">2</div>
        <div class="horoscope">3</div>
        <div class="horoscope">4</div>
        <div class="horoscope">5</div>
    </div>
</div>


<style>
    .father{
        width: 1200px;
        margin: auto;
    }
    .horoscope_left{
        float: left;
        margin-left: 70px !important;
    }
    .horoscope_right{
        float: right;
        margin-right: 70px !important;
    }
    .horoscope{
        width: 200px;
        height: 170px;
        background-color: #881717;
        border: 1px solid black;
        margin: 5px;
        padding: 5px;
        display: inline-block;

    }
    .row1{
        text-align: center;
    }
    .row3{
        text-align: center;
    }
</style>
</body>
</html>