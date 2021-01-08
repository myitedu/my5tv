<?php
$truck_company = $_POST['truck_company']??null;
$driver_name = $_POST['driver_name']??null;
$from = $_POST['from']??null;
$to = $_POST['to']??null;
$distance = $_POST['distance']??0;
$fee = $_POST['fee']??0.00;
require_once "database.php";

$db = new \Database\database("myitedu");
//Step 1: Insert the truck information
$sql = "INSERT INTO trucks (name, driver_name) VALUES('$truck_company','$driver_name')";
$db->sql($sql);

//Step 2: Get the id of the truck you just inserted
$sql = "SELECT id FROM trucks order by id desc limit 1;";
$truck =  $db->sql($sql);
$truck_id = $truck[0]['id'];

//Step 3: Insert the truck_loads information
$sql = "INSERT INTO truckloads (`truck_id`, `from`, `to`, `distance`, `fee`) VALUES($truck_id,'$to','$from',$distance, $fee);";
$db->sql($sql);
header("Location: index.php");
exit;


