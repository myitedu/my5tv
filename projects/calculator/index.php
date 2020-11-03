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

<div id="calculator">
    <div class="display">
        <div id="cirlces">
            <div class="circle circle_red"></div>
            <div class="circle circle_orange"></div>
            <div class="circle circle_green"></div>
        </div>

        0
    </div>
    <div class="buttons">
        <table class="table">
            <tr>
                <td>AC</td>
                <td>%/-</td>
                <td>%</td>
                <td>/</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>X</td>
            </tr>
            <tr>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>-</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>+</td>
            </tr>
            <tr>
                <td colspan="2">0</td>
                <td>,</td>
                <td>=</td>
            </tr>

        </table>
    </div>
</div>

<div class="sample_calculator">
    <img src="/img/macbook_calculator.PNG">
</div>



<style>
    .circle_red{
        background-color: #bf2828;
    }
    .circle_orange{
        background-color: #b79f2b;
    }
    .circle_green{
        background-color: #0acf0d;
    }
    .circle:hover{
        border: 1px dotted white;
    }
    .circle{
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 1px solid #4a4242;
        float: left;
        margin-right: 5px;
        margin-top: 2px;
        margin-left: 2px;
        cursor: pointer;
    }
    #cirlces{
        width: 100px;
        z-index: 11;
        position: relative;
        top: -8px;
        background-color: #0a2998;
    }
    .buttons td:last-child:hover{
        background-color: #ffffff !important;
        cursor: pointer;
    }
    .buttons td:hover{
        background-color: #bcbcbc;
        cursor: pointer;
    }
    .buttons td{
        border: 1px solid #4b4b4b;
        width: 80px;
        height: 60px;
        font-size: 27px;
        color: #101010;
        padding: 10px 10px 10px 6px;
        text-align: center;
        background-color: white;
    }

    .buttons td:last-child{
        background-color: #ed9231;
    }
    .display{
        text-align: right;
        font-size: 64px;
        color: white;
        padding: 10px 21px 10px 5px;
        font-family: unset;
        font-weight: 100;
        height: 102px;
    }
    .sample_calculator{
        margin: auto;
        position: absolute;
        top: 87px;
        z-index: 5;
        left: 230px;
        display: none;

    }
    #calculator{
        width: 304px;
        height: 407px;
        border: 1px solid #454343;
        margin: auto;
        position: relative;
        top: 97px;
        left: -2px;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        background-color: #4d4d4d;
        z-index: 20;
        opacity: 1;
    }
    body{
        background-color: #0e0e0e;
    }
</style>
</body>
</html>
