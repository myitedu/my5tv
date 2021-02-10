<?php
#echo "Min: " . min(2, 87,23,5, 7);
#echo "<hr>";
#echo "Max: " . max(354, 87,1000,5, 7);
//$num = -3883.7;
//echo abs($num);
//$num = 25.4;
//echo round($num);
//echo rand(1,5);
//$num = 6.3;
//echo floor($num);
/*if (){

}elseif(){

}elseif(){

}elseif(){

}elseif(){

}elseif(){

}elseif(){

}else{

}*/


$car = 'Nexia';

switch ($car){
    case 'BMW':
        echo 'This is a German car';
        break;

    case 'Honda':
        echo 'This is a Japanese car';
        break;

    case 'Nexia':
        echo uzbek_cars();
        break;

    default:
        echo 'This is other car';
        break;
}

function uzbek_cars(){
    return "All cars are made in either Andjian or Samarkand";
}