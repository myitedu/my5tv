<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/store.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/store.js"></script>
</head>
<body>
<?php
require_once "database.php";
$obj = new \Database\database("myitedu");
$products = $obj->sql("SELECT * FROM products");
?>
<div class="container-fluid">
    <div id="mystore">
        <div class="store_title">Jon's Shopping store</div>
        <table class="table table-bordered">
            <tr>
                <th>Icon</th>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>QTY</th>
            </tr>

            <?php foreach ($products as $product):?>
            <tr>
                <td>
                    <img class="product_icon" src="<?=$product['icon'];?>">
                </td>
                <td><?=$product['id'];?></td>
                <td><?=$product['name'];?></td>
                <td><?=$product['description'];?></td>
                <td>$<?=$product['price'];?></td>
                <td><?=$product['qty'];?></td>
            </tr>
            <?php endforeach;?>

        </table>
    </div>
</div>
</body>
</html>