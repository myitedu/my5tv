<?php
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'country';
include_once "database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT * FROM airports WHERE $field like '%$keyword%'";
$airports = $db->sql($sql);


