<?php

for($i=2; $i<100; $i++){
    echo "<a href='jon.php?number=$i' class='links'>$i</a> | ";
}
echo "<hr>";

$nomer = $_GET['number']??10;
$numbers = range(1, 10000);


$total = 0;
foreach ($numbers as $number){
    if ($number%$nomer===0){
        $total++;
        echo "<div class='numbers ten_numbers'>$number</div>";
    }else{
        echo "<div class='numbers'>$number</div>";
    }

}

echo "<p>There are total $total numbers found that can be divided by that number</p>";

?>
<hr>
<style>

    .links{
        margin: 5px;
        display: inline-block;

    }

    .numbers:hover{
        background-color: #ffffff;
        border: 3px dotted blue;
        cursor: pointer;
    }

    .numbers{
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        font-size: 2em;
        display: inline-block;
        margin: 5px;
        padding:5px;
        border-radius: 50%;
        border: 3px dotted darkred;
    }

    .even_numbers{
        background-color: #6cb00b;
    }

    .odd_numbers{
        background-color: red;
    }

    .twelve_numbers{
        background-color: #300101;
        color: yellow;
    }

    .ten_numbers{
        background-color: #750262;
        color: #9cf507;
    }

</style>
