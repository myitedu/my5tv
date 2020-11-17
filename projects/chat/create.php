<?php
date_default_timezone_set("America/New_York");
include_once "connectdb.php";

$owner_user_id =$_POST['owner_user_id']??null;
$to_user_id = $_POST['to_user_id']??null;
$message = $_POST['message']??null;
$timestamp = date('Y-m-d H:i:s'); //2020-11-16 21:57:48
$sql = "INSERT INTO chats (from_user_id, to_user_id, message, created_at, status) VALUES ($owner_user_id, $to_user_id, '$message','$timestamp','delivered');";
$create = $db->sql($sql);
echo 'success';
