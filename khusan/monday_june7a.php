<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


<div id="mystore">

<div id="tv">
 ededed
</div>
    <div data-price="3.25" class="product potato"></div>
    <div data-price="8.90" class="product beef"></div>
</div>


<style>

    .potato{
        position: relative;
        top: 250px;
        left: 61px;
        cursor: pointer;
    }

    .beef{
        position: relative;
        top: 10px;
        left: 510px;
        cursor: pointer;
        width: 50px !important;
    }

    .product{
        width: 80px;
        height: 100px;

    }

#tv{

    text-align: center;
    color: #300a63;
    width: 350px;
    height: 200px;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-color: white;
}
    #mystore{
        width: 1000px;
        height: 700px;
        margin: 50px;
        background-color: #300a63;
        background-image: url("https://st2.depositphotos.com/1001279/12487/i/950/depositphotos_124873386-stock-photo-7-eleven-shop.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        border: 5px double darkred;
    }

    .product_image{
        width: 50px;
    }

    .product:hover{
        background-color: #c7be1575;
    }
</style>

<script>
    $(function () {
        $(".potato").click(function () {
            let price = $(this).data('price');
            let tax = price * 0.08;
            let total = tax + price;
            $("#tv").html("<img class='product_image' src='https://images-na.ssl-images-amazon.com/images/I/81vJyb43URL._SL1500_.jpg'> Price: "+price+" <br> Tax: " + tax+"<br> Total:"+total);
        });

        $(".beef").click(function () {
            let price = $(this).data('price');
            let tax = (price * 0.08).toFixed(2);
            let total = eval(tax+"+"+price).toFixed(2);
            $("#tv").html("Price: "+price+" <br> Tax: " + tax+"<br> Total:"+total);
            $("#tv").html("<img class='product_image' src='https://images-na.ssl-images-amazon.com/images/I/91Tw1fy4jTL._SL1500_.jpg'> Price: "+price+" <br> Tax: " + tax+"<br> Total:"+total);
        });
    });
</script>

</body>
</html>