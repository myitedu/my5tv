<?php
$products = $db->sql("SELECT *, sc.qty AS sqty FROM shopping_cart AS sc
JOIN products AS p
ON sc.product_id = p.id WHERE sc.user_id = 99;");
?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                        $prices+=$product['price'];
                        $qtys+=$product['sqty'];
                        $total = $product['price'] * $product['sqty'] - ($product['price'] * $product['discount']/100);
                        $tax += $total * 0.08;
                        $grandtotal+=$total+($total * 0.08);
                        ?>
                        <tr>
                            <td>
                                <img class="product_icon" src="<?php echo $product['icon']; ?>">
                            </td>
                            <td><?php echo $product['name']; ?></td>

                            <td>
                                $<?php echo $total;?>
                            </td>
                            <td><?php echo $product['sqty'];?></td>
                            <td>
                                <?php
                                    echo "\$$total";
                                ?>

                            </td>
                            <td class="last_td">
                                <img class="remove_item_icon" src="https://image.flaticon.com/icons/png/512/61/61848.png">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<style>
    .last_td{
        text-align: center;
        width: 50px;
    }
    .remove_item_icon{
        width: 40%;
    }
</style>