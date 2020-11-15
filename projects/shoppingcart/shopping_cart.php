<?php
include_once "includes/index_include.php";
$sql = "SELECT *, sc.qty AS sqty, sc.id AS product_id FROM shopping_cart AS sc
JOIN products AS p
ON sc.product_id = p.id WHERE sc.user_id = 99;";
$products = $db->sql($sql);
if (!count($products)){
    exit("Your cart is empty");
}
?>
<table class="table table-bordered">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>QTY</th>
        <th>Total</th>
        <th>Remove</th>
    </tr>
    <?php
    $tax = 0;
    $grandtotal = 0;
    $prices = 0;
    $qtys = 0;
    foreach ($products as $product) {
        $prices+= round($product['price'],2);
        $qtys+=$product['sqty'];
        $total = $product['price'] * $product['sqty'] - ($product['price'] * $product['discount']/100);
        $tax += $total * 0.08;
        $grandtotal+=$total+($total * 0.08);
        $total = round($total, 2);
        ?>
        <tr>
            <td>
                <img class="product_icon" src="<?php echo $product['icon']; ?>">
            </td>
            <td><?php echo $product['name']; ?></td>

            <td>
                $<?php echo $product['price'];?>
            </td>
            <td><?php echo $product['sqty'];?></td>
            <td>
                <?php
                echo "\$$total";
                ?>

            </td>
            <td class="last_td">
                <img data-product_id="<?php echo $product['product_id']; ?>" class="remove_item_icon" src="https://image.flaticon.com/icons/png/512/61/61848.png">
            </td>
        </tr>
        <?php
    }
    ?>

    <tr>
        <td colspan="4">Tax</td>

        <td>$<?php echo round($tax,2);?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">Grand Total</td>
        <td>$<?php echo $prices;?></td>
        <td><?php echo $qtys;?></td>
        <td>$<?php echo round($grandtotal,2);?></td>
        <td>&nbsp;</td>
    </tr>

</table>