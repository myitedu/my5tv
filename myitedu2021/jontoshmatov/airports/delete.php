<?php
$id = $_GET['id']??null;
$id = (int) $id;
$keyword = $_GET['keyword']??null;
$field = $_GET['field']??'country';
$order = $_GET['order']??'id';
$orderby = $_GET['orderby']??'asc';

$field_lists = ['id','city','country','name'];
$orderby_lists = ['asc','desc'];

$order = in_array($order, $field_lists)?$order:'id';
$orderby = in_array($orderby, $orderby_lists)?$orderby:'asc';
$link = "index.php?keyword=$keyword&field=$field";

if (!$id){
    header("Location: index.php");
    exit;
}




############################################################################
require_once "database.php";
$obj = new \Database\database("myitedu");
$sql = "DELETE FROM airports WHERE id = $id;";
$delete = $obj->sql($sql);
header("Location: ". $link."&order=$order&orderby=$orderby");
exit;

