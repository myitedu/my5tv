$(function () {

    let num, number1, operator, number2, result;

    $(".number").click(function () {
        let number = $(this).text();
        if(typeof num === "undefined" && number==0) {
            //return false;
        }
        if(typeof num === "undefined") {
            num=number;
        }else{
            num+=number;
        }
        if (num.length>9){
            return false;
        }

        if(typeof operator === "undefined"){
            number1 = num;
            $(".result").text(number1);
        }else{
            number2 = num;
            $(".result").text(number1+operator+number2);
        }




    });

    $(".operator").click(function () {
        let op = $(this).text();
        if (op!='=') {
            operator = op;
            num = '';
        }
    });

    $(".reset").click(function () {
        $(".result").text(0);
        number1='', num='', number2='', operator='', result='';
    });

    $(".calculate").click(function () {
        console.log(operator);
        if(typeof operator === "undefined") {
            $(".result").text(number1);
        }else{
            if(typeof number2 === "undefined") {
                $(".result").text(number1+operator);
            }else{
                let str;

                if (operator=='+'){
                    str = number1+'+'+number2;
                }
                if (operator=='-'){
                    str = number1+'-'+number2;
                }

                if (operator=='÷'){
                    str = number1+'/'+number2;
                }

                if (operator=='×'){
                    str = number1+'*'+number2;
                }
                result =  eval(str);
                $(".result").text(result);
            }
        }
    });


















});