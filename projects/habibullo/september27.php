<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>

<div class="container-fluid">
    <h5>Habibullo Dehkon Bozoriga Hush Kelibsiz</h5>
<form method="post">
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Rasm</th>
            <th>Nomi</th>
            <th>Tasvif</th>
            <th>Price</th>
            <th>Nechta</th>
        </tr>

        <tr>
            <td>1</td>
            <td><img class="qovin_image" src="https://www.eduardoroacg.com/web/wp-content/uploads/2019/01/T_Cantaloupe-Alpha.png">
                <input type="hidden" name="qovin_image" value="https://www.eduardoroacg.com/web/wp-content/uploads/2019/01/T_Cantaloupe-Alpha.png">
            </td>
            <td>Qovin<input type="hidden" name="qovin_name" value="Qovun"></td>
            <td>Jizzah shirin qovunlari <input type="hidden" name="qovin_desc" value="Jizzah shirin qovunlari "></td>
            <td>$3.62 <input type="hidden" name="qovin_price" value="3.62"></td>
            <td>
                <select name="qovin_qty">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td><img class="product_image"  src="https://www.kindpng.com/picc/m/293-2938511_watermelon-slice-with-bite-hd-png-download.png"> </td>
            <td>Tarvuz</td>
            <td>Pishgan tarvuz </td>
            <td>$5.62</td>
            <td>
                <select name="nechta">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="ohirgi_td" colspan="6">
                <button class="btn btn-dark" type="reset">Boshqata Boshlash</button>
                <button class="btn btn-success" type="submit">Sotib Olish</button>
            </td>
        </tr>

    </table>
</form>


    <div id="hisobot">
        <?php
        //Integer
        //Boolean
        //Float or double

        $parms = $_POST;

        //product_qty
        //product_price
        //nechta
        //product_desc
        //product_name

        $total = $parms['qovin_price'] * $parms['qovin_qty'];
        $total = (floatval($total));

        /*

        $qovun = 2.50;
        $tarvuz = 3.21;

        $qovin_soni = 5;
        $tarvuz_soni = 10;


        $qovin_jami = $qovun * $qovin_soni;
        $tarvuz_jami = $tarvuz * $tarvuz_soni;
        $jami = $qovin_jami + $tarvuz_jami;

        $text = "$qovin_soni qovin \$$qovin_jami <br>$tarvuz_soni tarvuz \$$tarvuz_jami <br>";
        echo $text;
        */
        ?>

        <table class="table table-bordered">
            <tr>
                <td>Rasm</td>
                <td>Name</td>
                <td>Description</td>
                <td>Price</td>
                <td>Qty</td>
                <td>Total</td>
            </tr>
            <tr>
                <td><img class="qovin_image_small" src="<?php echo $parms['qovin_image']?>"> </td>
                <td><?php echo $parms['qovin_name']?></td>
                <td><?php echo $parms['qovin_desc']?></td>
                <td>$<?php echo $parms['qovin_price']?></td>
                <td><?php echo $parms['qovin_qty']?></td>
                <td>$<?php echo $total?></td>
            </tr>
        </table>

    </div>

</div>


<style>
    .qovin_image_small{
        width: 60px;
    }

    #hisobot{
        width: 650px;
        height: auto;
        margin: auto;
        border-radius: 10px;
        border: 1px solid black;
        background-color: whitesmoke;
        margin-bottom: 100px;
    }

    .ohirgi_td{
        text-align: center;
    }
    h5{
        text-align: center;
    }
    th{
        background-color: #2e6da4;
        color: yellow;
        font-size: 120%;
    }
    .product_image{
        width: 60px;
    }
</style>
</body>
</html>




