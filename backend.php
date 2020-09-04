<?php
$parms = $_POST;
$subject = $parms['subject']??'My new subject';
$created_by = $parms['created_by']??1;

include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "INSERT INTO blogs (subject) VALUES('$subject');";
$blogs = $db->sql($sql);

header("Location: index.php?msg=added");
exit;
