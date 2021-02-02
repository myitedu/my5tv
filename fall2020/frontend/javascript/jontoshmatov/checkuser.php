<?php
$email = $_POST['email']??null;
if (empty($email)){
    exit(0);
}
require_once "database.php";
$db = new \Database\database("myitedu");
$user = $db->sql("SELECT id FROM users WHERE email='$email'");
if (empty($user)){
    exit(false);
}else{
    exit(true);
}