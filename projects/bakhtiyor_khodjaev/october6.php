<?php

$country = file_get_contents("countrys.txt");
$country = str_ireplace("USA","Canada",$country);
echo $country;
$country = explode(" ",$country);
echo "<pre>";
print_r($country);
foreach ($country as $countrys){
    $countrys = str_replace("Uzbekistan","<span>Uzbekistan</span>",$countrys);
    echo $countrys."<hr>";
}
foreach ($country as $countrys){
    if ($countrys%2===0){
        echo "<span class='even'>$countrys</span><br>";
    }else{
        echo "<span class='odd'>$countrys</span><br>";
    }
    echo "<hr>";
}


?>

<style>
    span{
        background-color: #7abaff;
        color: gold;
    }
    .even{
        background-color: #7abaff;
        color: gold;
    }
    .odd{
        background-color: darkgreen;
        color: darkgray;
    }
</style>
