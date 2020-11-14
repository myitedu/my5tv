<?php
include_once "database.php";
$db = new \Database\database("myitedu");
$owner_user_id =$_POST['owner_user_id']??null;
$to_user_id = $_POST['to_user_id']??null;
$sql = "DELETE FROM chats WHERE (from_user_id = $owner_user_id and to_user_id = $to_user_id) OR (from_user_id = $to_user_id and to_user_id = $owner_user_id)";
$create = $db->sql($sql);
echo 'success';
