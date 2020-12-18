<?php
namespace Bakhti;
class Calculate{
    public $cash, $change, $tax, $total_amount_after_tax;
    public $products, $total_amount;
    public function __construct(){
        $this->tax = 0.08;
        $this->change =0;
        $this->cash = $_GET['cash']??100;
        $this->total_amount_after_tax = 0;
        $this->total_amount = 0;
        $this->products = [
            ['name'=>'bread','price'=>1.35, 'qty'=>4],
            ['name'=>'oil','price'=>2.00, 'qty'=>2],
            ['name'=>'shashlik','price'=>4.22, 'qty'=>6],
            ['name'=>'coffee','price'=>0.68, 'qty'=>8],
        ];
    }
}
$calulator = new Calculate();
?>
    <div id="title">RECEIPT</div>
    <div id="title2">
        <span>Terminal #1</span>
        <span>11:32 AM</span>
        <span>01-02-2018</span>
        <div class="clearfix"></div>
    </div>
    <div id="products">
        <table class="table  product_table">
            <?php
            $calulator->total_amount = 0;
            foreach ($calulator->products as $product){
                $total = $product['qty'] * $product['price'];
                echo "<tr>";
                echo "<td class='prod_name'>{$product['qty']} <span class='x_sign'>x</span> {$product['name']}</td>";
                echo "<td>\$$total</td>";
                echo "</tr>";
                $calulator->total_amount+=$total;
            }
            $calulator->tax = round($calulator->total_amount * 0.08,2);
            $calulator->total_amount_after_tax = $calulator->tax + $calulator->total_amount;
            $calulator->change = $calulator->cash - $calulator->total_amount_after_tax;
            $calulator->change = round($calulator->change,2);
            ?>

        </table>

    </div>
    <div id="amounts">
        <table class="table product_amount">
            <tr>
                <td> Total Amount</td>
                <td>$<?php echo $calulator->total_amount;?></td>
            </tr>
            <tr>
                <td> CASH</td>
                <td id="prod_cash" class="prod_cash" contenteditable="true"><?php echo $calulator->cash;?></td>
            </tr>
            <tr>
                <td> TAX</td>
                <td>$<?php echo $calulator->tax;?></td>
            </tr>
            <tr>
                <td> CHANGE</td>
                <td>$<?php echo $calulator->change;?></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Bank Card</td>
                <td>******** 7211</td>
            </tr>
            <tr>
                <td>Approval#</td>
                <td>15654</td>
            </tr>
        </table>
    </div>
    <div id="thankyou">
        ****** thank you *******
    </div>
    <div id="barcode">
        <img src="https://jet-marking.com/wp-content/uploads/2017/04/pasted-image-0-1.png">
    </div>
<script>
    $(function (){

        $('#prod_cash').focusout(function() {
            let cash = $(this).text();
            $("#mybill").load("backend.php?cash="+cash);
        });

    });
</script>