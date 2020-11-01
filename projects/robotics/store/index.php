<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to out Store</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
include_once "database.php";
$db = new \Database\database('myitedu');
$products = $db->sql("SELECT * FROM products2");

$parms = $_GET;
echo "<pre>";
print_r($parms);
echo "</pre>";

?>
<div class="container-fluid">
    <div id="mystore">
        <h2>Welcome to our Store</h2>
        <hr>
        <form>
            <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Image</th>
            </tr>
            <?php
            foreach ($products as $product){
            ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['description']?></td>
                <td>$<?=$product['price']?></td>
                <td>
                    <select name="qty_<?=$product['id']?>">
                    <?php
                    for ($i=1; $i<=$product['qty']; $i++){
                        echo "<option value='{$i}'>{$i}</option>";
                    }
                    ?>
                </td>
                <td><img src="<?=$product['image']?>"> </td>
            </tr>
            <?php
            }
            ?>
                <tr>
                    <td class="checkout_td" colspan="6">
                        <button class="btn btn-success" type="submit">Checkout</button>
                    </td>
                </tr>
        </table>
        </form>
    </div>
</div>
<style>
    .checkout_td{
        text-align: center;
    }
    .product_name{
        color:red;
        font-weight: bolder;
    }
    .product_price{
        color: green;
        font-weight: bolder;
    }
    #mystore h2{
        text-align: center;
        font-size: 30px;
        font-family: "Lucida Handwriting";
        padding: 10px;
        margin: 30px;
        color: red;
    }
    table img{
        width: 100px;
    }
    th{
        background-color: rebeccapurple;
        color: yellow;
    }
    tr:hover{
        background-color: #f4f0f0;
        cursor: pointer;
    }
</style>
</body>
</html>
