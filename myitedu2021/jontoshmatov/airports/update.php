<?php
ini_set("display_errors", 1);
$id = $_POST['id']??null;
$id = (int) $id;
$city_name = $_POST['city_name']??null;
$country_name = $_POST['country_name']??null;
if (!$id){
    exit('The city id is empty or invalid');
}
if (empty($city_name)){
    exit('The city name is empty');
}
############################################################################
require_once "database.php";
$obj = new \Database\database("myitedu");
$sql = "UPDATE airports SET city = '$city_name' WHERE id = $id;";
$update = $obj->sql($sql);
echo 200;
exit;

