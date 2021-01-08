<?php
$truckloadsid = $_POST['truckloadsid']??null;
$truckid = $_POST['truckid']??null;
require_once "database.php";

$db = new \Database\database("myitedu");
//Step 1: Delete the truck
$sql = "DELETE FROM trucks WHERE id = $truckid;";
$db->sql($sql);

//Step 1: Delete the truckloads
$sql = "DELETE FROM truckloads WHERE id = $truckloadsid;";
$db->sql($sql);
echo 200;
exit;