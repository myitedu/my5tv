<?php
$firstname = $_POST['first_name']??null;
$lastname = $_POST['last_name']??null;
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$password_confirm = $_POST['emapassword_confirm']??null;

include_once "database.php";
$db = new \Database\database('myitedu');

$sql = "INSERT INTO users2(email,password,first_name,last_name) VALUES('jon@jon.com','abc123','Jonny','Tosh');";
$newaccount = $db->sql($sql);
$sql = "SELECT * FROM users2 WHERE email = '$email' limit 1;";
$newuser = $db->sql($sql);
$newuser = $newuser[0]??null;


