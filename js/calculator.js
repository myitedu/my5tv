let number = '';
let number1 = '';
let number2 = '';
let sign = '';
<<<<<<< HEAD
let mynumber = '';

$(function () {

    $(".num").click(function () {
        number = $(this).text();
        if (sign!==''){
            number1+=number;
        }else{
            number2+=number;
        }

        display_result(number1+sign+number2);

    });


=======
let formula = '';
$(function () {
    //Raqamlarni bosganizda bajaralyotgan harakat
    $(".num").click(function () {
        number = $(this).text();
        if (sign !== '') {
            number1 += number;
            number = '';
        } else {
            number2 += number;
        }
        display_result(number2 + sign + number1);
        formula = eval(number2 + sign + number1);
    });
    //Belgilarni bosganizda bajaraliyotgan harakat
>>>>>>> f2974b2955e11c483b192b27957a7240592f3557
    $(".sign").click(function () {
        //Bosilgan beligini toplash
        sign = $(this).text();
<<<<<<< HEAD
        if (sign==='='){
            calcualte();
=======
        //Belgilarni HTML entity formatida oddiy mathematika operator
        //beligisiga konvertatsiya qilish
        if (sign === '÷') {
            sign = '/';
        }
        if (sign === '×') {
            sign = '*';
        }
        if (sign === '−') {
            sign = '-';
        }
        if (sign === 'AC') {
            Ac_button();
        }
        if (sign === '=') {
            display_result(formula);
            Ac_button(false);
>>>>>>> f2974b2955e11c483b192b27957a7240592f3557
        }
    });

});
<<<<<<< HEAD


function calcualte(){
   let result = eval()
}





function display_result(num){
=======
//Mathetika operatsiyasini natijasini ekranga chiqarish funktsiyasi
function display_result(num) {
    //result degan class div ichiga HTML formatida print qilish
>>>>>>> f2974b2955e11c483b192b27957a7240592f3557
    $(".result").html(num);
}
//Kalkyulatrni qayta o'rnatish funktsiyasi
function Ac_button(reset = true) {
    number = '';
    number1 = '';
    number2 = '';
    sign = '';
    //Agar reset degan o'zgaruvchan (Variable) to'gri bolsa
    //Ekrandagi natijani 0 ga tenglashtirish
    if (reset) {
        display_result(0);
    }
}