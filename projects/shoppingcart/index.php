<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
include_once "database.php";
$db = new \Database\database("myitedu");
$products = $db->sql("SELECT * FROM products;");

$qty=0;

$parms = $_GET;
$id = $parms['id']??0;
$qty = $parms['qty']??0;
$action = $parms['action']??null;



if (empty($_SESSION['products']['qty'])){
    $_SESSION['products']['qty'] = 0;
}

if ($action == 'empty'){
    $db = new \Database\database("myitedu");
    $sql = "DELETE FROM shopping_cart;";
    $product = $db->sql($sql);
}

if ($qty == 'delete'){
    $db = new \Database\database("myitedu");
    $sql = "DELETE FROM shopping_cart WHERE product_id = $id;";
    $product = $db->sql($sql);
}

if ($qty>0) {
    $_SESSION['products']['qty'] += $qty;
    $db = new \Database\database("myitedu");
    $sql = "SELECT * FROM shopping_cart WHERE product_id = $id;";
    $product = $db->sql($sql);

    if (!empty($product)){
        $db = new \Database\database("myitedu");
        $sql = "UPDATE shopping_cart SET qty = $qty, user_id = 99 WHERE product_id = $id;";
        $product2 = $db->sql($sql);
    }else{
        $db = new \Database\database("myitedu");
        $sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES($id, $qty, 99);";
        $product3 = $db->sql($sql);
    }


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
<div class="container-fluid">

    <div class="large_image_window">

    </div>

    <div data-toggle="modal" data-target="#staticBackdrop" class="shopping_cart">99</div>

    <h4>Our Products</h4>

    <hr>


    <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>QTY</th>
        </tr>

        <?php
        foreach ($products as $product) {
            ?>
            <tr>
                <td>
                    <img data-img_url="<?php echo $product['icon']; ?>" class="product_icon" src="<?php echo $product['icon']; ?>">
                </td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td>
                    <?php
                    $price = $newprice = $product['price'];
                    $discount = $product['discount'];

                    if ($discount>0) {
                        $newprice = $price - ($price * $discount / 100);
                        echo "<img class=\"discount_icon\" src = \"https://www.iconninja.com/files/452/351/726/discount-tag-icon.png\">";

                        echo "<span class='new_price'>\$$newprice</span>";
                        echo "<br>";
                        echo "<span class='old_price'>\$$price</span>";
                    }else{
                        echo "$".$price;
                    }

                    ?>
                </td>
                <?php
                if ($product['qty']){
                ?>
                <td>
                    <form>
                        <select name="qty">
                            <?php
                            display_select_options($product['qty']);
                            ?>
                        </select>
                        <input name="id" type="hidden" value="<?php echo $product['id']?>">
                        <input value="" class="product" type="submit" name="sbt_btn">
                    </form>
                </td>
                <?php
                }else{
                ?>
                    <td>Out of Stock</td>

                <?php
                }
                ?>

            </tr>
            <?php
        }
        ?>

    </table>

    <hr>
    <a class="btn btn-success" href="index.php?action=empty">Empty Shopping Cart</a>

</div>
<style>
    .displayed_img{
        width: 100%;
    }

    .large_image_window{
        width: 400px;
        height: 300px;
        position: absolute;
        left: 15%;
        top: 25%;
        display: none;
    }

    .new_price{
        color: #0f5403;
    }
    .old_price{
        text-decoration: line-through;
        color: #969090;
    }
    .discount_icon{
        width: 30px;
        position: relative;
        right: 5px;
        top: 5px;
    }
    .product {
        background-image: url("https://cdn3.iconfinder.com/data/icons/ecommerce-flat-style-2/512/e_-_Commerce_-_Flat_Style_2-05-128.png");
        background-size: 100% 100%;
        background-position: center;
        width: 29px;
        position: relative;
        top: 9px;
    }

    .shopping_cart {
        width: 40px;
        height: 40px;
        position: absolute;
        right: 20px;
        top: 20px;
        z-index: 100;
        background-image: url("https://i.pinimg.com/originals/5d/26/a1/5d26a173f443cbd190e34481438d474b.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        line-height: 38px;
        color: red;
        font-weight: bolder;
        border: none !important;
        cursor: pointer;
    }

    .sh_add_btn {
        width: 30px;
    }

    tr:hover {
        background-color: #b3e096 !important;
        cursor: pointer;
    }

    th {
        background-color: #033b6e;
        color: whitesmoke;
    }

    tr:nth-child(even) {
        background-color: lightgrey;
    }

    .product_icon {
        width: 70px;
    }

    h4 {
        color: lightgreen;
    }

    table {
        background-color: whitesmoke;
    }

    .container-fluid {
        text-align: center;
    }

    body {

        color: #6b6262;
    }
</style>


<script>
    $(function (){
        $(".large_image_window").empty().hide();

        $(".product_icon").mouseenter(function (){
           let img_url = $(this).data("img_url");
           let img = "<img class='displayed_img' src='"+img_url+"'>";
           $(".large_image_window").show().html(img);
        });

        $(".product_icon").mouseout(function (){
            $(".large_image_window").empty().hide();
        });


    });
</script>

<?php include_once "modal.php";?>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>