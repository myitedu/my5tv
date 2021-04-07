<?php
$id = $_POST['id']??null;
$id = (int) $id;
$city_name = $_POST['city_name']??null;
$country_name = $_POST['country_name']??null;
$name = $_POST['name']??null;
if (!$id){
    exit('The city id is empty or invalid');
}

############################################################################
require_once "database.php";
$obj = new \Database\database("myitedu");
$sql = "UPDATE airports SET city = '$city_name',country='$country_name',name = '$name' WHERE id = $id;";
$update = $obj->sql($sql);
echo 200;
exit;

