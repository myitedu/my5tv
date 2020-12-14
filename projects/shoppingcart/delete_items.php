<?php
session_start();
include_once "includes/index_include.php";
$product_id = $_POST['product_id']??null;




if (empty($product_id)){
    exit("Product id is empty");
}

$product_id = (int) $product_id;




$delete = $db->sql("DELETE FROM shopping_cart WHERE id = $product_id;");
    $_SESSION['products']['qty']--;
echo $_SESSION['products']['qty'];