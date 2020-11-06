$(function (){
    let number1 = '';
    let number2 = '';
    let operator = '';
    let formula = '';
    let numbers = '';
    $(".number").click(function (){
        if (operator=='') {
            numbers = number1 += $(this).text();

        }else{
            numbers = number2 += $(this).text();
        }
        $("#display").html(numbers);

        if (number1!='' && operator!='' && number2!=''){
            formula = eval(number1 +''+operator+''+ number2);
        }
    });

    $(".operator").click(function (){
        operator = $(this).text();

        if (operator=='x'){
            operator = '*';
        }

        if (operator=='='){
            calculate();
        }

        if (operator == 'AC'){
            reset();
            return false;
        }
    });
    function reset(display=false){

        number1 = '';
        number2 = '';
        operator = '';
        if (!display) {
            $("#display").html(0);
        }
    }

    function calculate(){
        if (formula=='') {
            return false;
        }
            formula = formula.toFixed(7);
            formula = parseFloat(formula);
            $("#display").html(formula);
            reset(true);
            return false;

    }
})