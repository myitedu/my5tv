<?php
$keyword = $_POST['keyword']??"Sama";
if (empty($keyword)){
    exit("Your keyword is empty");
}
require_once "../../database.php";
$db = new \Database\database("myitedu");

$cities = $db->sql("SELECT city, country FROM airports WHERE city like '$keyword%' group by city, country");

foreach ($cities as $num=>$city){
    echo "<p data-city='{$city['city']}' class='city_item'>{$city['city']}, {$city['country']}</p>";
}
