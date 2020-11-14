<?php
include_once "connectdb.php";

$owner_user_id =$_POST['owner_user_id']??null;
$to_user_id = $_POST['to_user_id']??null;
$message = $_POST['message']??null;
$sql = "INSERT INTO chats (from_user_id, to_user_id, message) VALUES ($owner_user_id, $to_user_id, '$message');";
$create = $db->sql($sql);
echo 'success';
