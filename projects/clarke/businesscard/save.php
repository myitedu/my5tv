<?php
require_once "database.php";
$parms = $_POST;
$db = new \Database\database("myitedu");
$sql = "UPDATE business_cards SET 
company_name='{$parms['company_name']}',
full_name='{$parms['full_name']}',
title='{$parms['title']}',
phone='{$parms['phone']}',
email='{$parms['email']}',
website='{$parms['website']}',
location='{$parms['location']}'
WHERE id={$parms['id']};";
$data = $db->sql($sql);
echo $sql;