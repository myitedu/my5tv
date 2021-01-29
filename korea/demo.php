<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Products List</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
require_once "database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT * FROM products;";
$products = $db->sql($sql);
?>

<div class="container-fluid">
    <h4>Our Products List</h4>
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Icon</th>
        </tr>

        <?php
        foreach ($products as $product){
        ?>
        <tr>
            <td><?php echo $product['id'];?></td>
            <td><?php echo $product['name'];?></td>
            <td><?php echo $product['description'];?></td>
            <td><?php echo $product['price'];?></td>
            <td><img class="icon" src="<?php echo $product['icon'];?>"></td>
        </tr>
        <?php
        }
        ?>

    </table>
</div>

<style>

    tr:hover{
        background-color: #00c882 !important;
        cursor: pointer;
    }

    td{
        border: 1px solid black !important;
    }


    th{
        background-color: maroon;
        color: goldenrod;
    }
    .icon{
        width: 60px;
    }

    table{
        background-color: #e3dddd;
    }
</style>

</body>
</html>