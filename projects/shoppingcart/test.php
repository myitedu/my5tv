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
<div id="checkout">
<h2>Secure checkout</h2>
    <p>Choose your preferred payment method</p>
    <input value="cc" type="radio" name="credit_type">
    <input value="paypal" type="radio" name="credit_type">
    <input value="pay" type="radio" name="credit_type">
    <table class="table table-bordered checkout_table">
        <tr>
            <td colspan="2">
                <p>Name on card</p>
                <p><input name="name" type="text" placeholder="John Smith"></p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p>Card number</p>
                <p><input name="card_number" type="number" placeholder="1234 5678 9012 3456"></p>
            </td>
        </tr>
        <tr>
            <td>Expiry date</td>
            <td>Security Code</td>
        </tr>
        <tr>
            <td><input name="expiry_date" placeholder="12/21" type="text"></td>
            <td><input type="number" name="security_code" placeholder="123"></td>
        </tr>
        <tr>
            <td colspan="2" class="checkout_button">
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </table>
</div>
<style>
    .checkout_button button{
        width: 99%;
    }
    .checkout_button{
        text-align: center;
    }
    .checkout_table input{
        width: 100%;
        height: 30px;
        border: 1px solid grey;
        border-radius: 3px;
        padding: 3px;
    }
    .checkout_table td{
        text-align: left;
    }
    .checkout_table{
        width: 99%;
        margin: auto;
    }
    #checkout{
        width: 90%;
        height: auto;
        margin: auto;
        border: 1px solid grey;
        text-align: center;
    }
</style>
</body>
</html>