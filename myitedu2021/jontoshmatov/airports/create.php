<?php
$city_name = $_POST['city_name']??null;
$country_name = $_POST['country_name']??null;
$airport_name = $_POST['airport_name']??null;

############################################################################
require_once "database.php";
$obj = new \Database\database("myitedu");
$sql = "INSERT INTO airports (`city`,`country`,`name`) VALUES('$city_name','$country_name','$airport_name');";
$create = $obj->sql($sql);
echo 200;
exit;

