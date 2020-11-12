<?php
session_start();
include_once "database.php";
$db = new \Database\database("myitedu");
$qty = $_POST['qty']??null;
$product_id  = $_POST['product_id']??null;
$user_id = $_POST['user_id']??99;

if (empty($qty) || empty($product_id)){
    exit("Either qty or product_id field is empty");
}



$db = new \Database\database("myitedu");
$sql = "SELECT * FROM shopping_cart WHERE product_id = $product_id;";
$product = $db->sql($sql);

if (empty($_SESSION['products']['qty'])){
    $_SESSION['products']['qty'] = 1;
}




if (!empty($product)){
    $session_qty = $_SESSION['products']['qty'];
    echo "Updating: ";
    $sql = "UPDATE shopping_cart SET qty = $qty, user_id = $user_id WHERE product_id = $product_id;";
    $product = $db->sql($sql);
    echo $session_qty;
    exit;
}else{
    $session_qty = $_SESSION['products']['qty'];
    echo "Inserting: ";
    $sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES($product_id, $qty, $user_id);";
    $product = $db->sql($sql);
    echo $session_qty;
    $_SESSION['products']['qty']++;
    exit;
}

$session_qty = $_SESSION['products']['qty'];
echo $session_qty;
exit;
?>
