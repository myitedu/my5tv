<?php
$file = file_get_contents("../../cars.txt");
$cars = explode(",", $file);
foreach ($cars as $car){
    echo "<div class='car'><a href='https://www.google.com/search?q=$car'>$car</a></div>";
}
?>
<style>
    .car{
        width: auto;
        height: 40px;
        margin: 5px;
        display: inline-block;
        text-align: center;
        font-size: 25px;
        color: black;
        border: 1px solid black;
        background-color: yellow;
    }
    .car:hover, a:hover{
        background-color: #0a2998;
        color: white !important;
        cursor: pointer;
    }
</style>

