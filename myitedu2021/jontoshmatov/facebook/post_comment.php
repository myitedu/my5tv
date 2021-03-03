<?php
$comment = $_POST['comment']??null;
$icon = "https://www.shareicon.net/data/256x256/2016/05/24/770139_man_512x512.png";
if (empty($comment)){
    header("Location: index.php");
    exit;
}

require_once "database.php";
$obj = new \Database\database('myitedu');
$sql = "INSERT INTO comments (icon, comment) VALUES('$icon','$comment')";
$obj->sql($sql);
header("Location: index.php");
exit;