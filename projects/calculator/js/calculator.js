$(function (){
    let number1 = '';
    let number2 = '';
    let operator = '';
    let formula = '';
    let numbers = '';
    let operator_id = '';

    $(".number").click(function (){
        if (operator=='') {
            numbers = number1 += $(this).text();
        }else{
            numbers = number2 += $(this).text();
        }
        $("#display").html(numbers);
        if (operator_id) {
            $("#" + operator_id).css("background-color", "#ed9231");
        }
        if (operator=='x'){
            operator = '*';
        }
        formula = eval(number1 +''+operator+''+ number2);
    });

    $(".operator").click(function (){
        operator_id = $(this).attr('id');

        let has_id = $(this).attr("id");
        if (typeof has_id !== 'undefined'){
            $(this).addClass("clicked_operator")
        }else{
            $("#"+has_id).removeClass("clicked_operator")
        }



        operator = $(this).text();

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