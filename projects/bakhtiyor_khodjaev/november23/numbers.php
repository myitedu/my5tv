<?php
$numbers = range(1,100);
foreach ($numbers as $number){
    if ($number%2===0){
        echo "<span class='even'>$number</span><br>";
    }else{
        echo "<span class='odd'>$number</span><br>";
    }
    echo "<hr>";
}
?>

<style>
    .even{
        background-color: #1a4f07;
        padding: 6px;
    }
    .odd{
        background-color: #ac170b;
        padding: 6px;
    }
</style>
