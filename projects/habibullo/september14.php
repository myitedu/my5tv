<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculcator</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<div class="container-fluid">
    <div id="calculator">
        <table class="table">
            <tr>
                <th colspan="4" id="result">0</th>
            </tr>
            <tr>
                <td id="reset">C</td>
                <td>&percnt;/&minus;</td>
                <td class="operator">%</td>
                <td class="operator">&divide;</td>
            </tr>
            <tr>
                <td class="num">7</td>
                <td class="num">8</td>
                <td class="num">9</td>
                <td class="operator">x</td>
            </tr>
            <tr>
                <td class="num">4</td>
                <td class="num">5</td>
                <td class="num">6</td>
                <td class="operator">&minus;</td>
            </tr>
            <tr>
                <td class="num">1</td>
                <td class="num">2</td>
                <td class="num">3</td>
                <td class="operator">&plus;</td>
            </tr>
            <tr>
                <td class="num" colspan="2">0</td>
                <td>.</td>
                <td class="equal">=</td>
            </tr>
        </table>
    </div>
</div>
<style>
    td:last-child{
        background-color: orange;
    }
    table{
        border: none;

    }
    th{
        border: 0px !important;
        font-size: 3em;
        text-align: right;
        color: whitesmoke;
    }
    #calculator{
        width: 300px;
        height: auto;
        margin: 100px auto;

        background-color: #a6aaab;
    }
    td{
        text-align: center;
        border-right: 1px solid #f0f0f0;
        color: whitesmoke;
        font-size: 1.5em;
    }
    tr:last-child td{
        border: 1px solid #f0f0f0;
    }

    td:hover{
        background-color: lightblue;
        cursor: pointer;
        color: #740808;
    }

</style>
<script>
    $(function () {
        let num = '';
        let operator = '';
        let number1 = '';
        let number2 = '';

        $(".num").click(function () {
            let number = $(this).text();
           num = number;
           if (operator==''){
               number1+=num;
           }else{
               number2+=num;
           }
            $("#result").html(number1+operator+number2);
        });

        $(".operator").click(function () {
            let oper = $(this).text();
            operator = oper;

            if (operator=='x'){
                operator='*';
            }
            if (operator=='÷'){
                operator='/';
            }
            if (operator=='−'){
                operator='-';
            }


            $("#result").html(operator);

            if (num == ''){
                return false;
            }
        });




        $(".equal").click(function () {
            //let result = eval("number1 + operator + number2");
            let result = eval(number1 + " "+operator+" " + number2);
            $("#result").html(result);
            reset_calucator();
        });

        $("#reset").click(function () {
            reset_calucator(1);
        });

        function reset_calucator(display_reset=0) {
            num = '';
            number1 = '';
            number2 = '';
            operator = '';
            if (display_reset==1) {
                $("#result").html(0);
            }
        }


    });
</script>
</body>
</html>