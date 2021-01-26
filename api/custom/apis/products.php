<?php
//This is an API just like Rapidapi.com
 require_once "database.php";
 $db = new \Database\database("myitedu");
 $products = $db->sql("SELECT * FROM products;");
 $products = json_encode($products);
echo $products;