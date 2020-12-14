<?php
include_once "database.php";
$db = new \Database\database("myitedu");
$products = $db->sql("SELECT * FROM products;");

$qty=0;

$parms = $_GET;
$id = $parms['id']??0;
$qty = $parms['qty']??0;
$action = $parms['action']??null;

if ($action == 'empty'){
    $sql = "DELETE FROM shopping_cart;";
    $product = $db->sql($sql);
    unset($_SESSION['products']['qty']);
    session_destroy();
    header("Location: index.php");
    exit;
}

if ($qty == 'delete'){
    $sql = "DELETE FROM shopping_cart WHERE product_id = $id;";
    $product = $db->sql($sql);
}


function display_select_options($maxlimit=0)
{
    if ($maxlimit>0) {
        for ($i = 1; $i <= $maxlimit; $i++) {
            echo "<option name='product$i' value=\"$i\">$i</option>";
        }
    }else{
        echo "<option name='product1' value=\"0\">0</option>";
    }
    echo "<option name='product$i' value=\"delete\">Delete</option>";
}

?>