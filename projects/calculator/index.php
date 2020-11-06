<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/calculator.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/calculator.js"></script>
</head>
<body>
<div id="calculator">
    <div id="display" class="display">
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
                <td class="operator">AC</td>
                <td class="operator">%/-</td>
                <td class="operator">%</td>
                <td class="operator">/</td>
            </tr>
            <tr>
                <td class="number">7</td>
                <td class="number">8</td>
                <td class="number">9</td>
                <td class="operator">x</td>
            </tr>
            <tr>
                <td class="number">4</td>
                <td class="number">5</td>
                <td class="number">6</td>
                <td class="operator">-</td>
            </tr>
            <tr>
                <td class="number">1</td>
                <td class="number">2</td>
                <td class="number">3</td>
                <td class="operator">+</td>
            </tr>
            <tr>
                <td class="number" colspan="2">0</td>
                <td>,</td>
                <td class="operator">=</td>
            </tr>

        </table>
    </div>
</div>
<div class="sample_calculator">
    <img src="/img/macbook_calculator.PNG">
</div>
</body>
</html>
