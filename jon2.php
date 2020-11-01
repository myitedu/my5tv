<?php
include "database.php";
$db = new \Database\database("myitedu");
$parms = $_POST;
$id = (int) $parms['id'];
$txt = (string) $parms['txt'];

$sql = "UPDATE blogs SET content='$txt' WHERE id = $id";
$saved = $db->sql($sql);
echo "Your blog #$id has been updated";