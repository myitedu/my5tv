<?php
################################################################################
require_once "database.php";
$db = new \Database\database("cardealers");
$websites = $db->sql("SELECT name FROM companies;");
$company_names = array_column($websites,"name");
################################################################################
$company = $_GET['company']??null;
if (!in_array($company, $company_names)){
    $company = 'xyz';
}
################################################################################
$logo = "https://pngimage.net/wp-content/uploads/2018/06/used-car-dealers-in-png-2.png";
$navbar = "#343a40";
$name = "XYZ";
$website = $db->sql("SELECT * FROM companies WHERE name='$company' limit 1");
$website = $website[0];

if (!empty($website['logo'])){
    $logo = $website['logo'];
}
if (!empty($website['navbar'])){
    $navbar = $website['navbar'];
}
if (!empty($website['name'])){
    $name = $website['name'];
}
################################################################################