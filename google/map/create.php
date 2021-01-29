<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
$company_name = $_POST['company_name']??null;
$company_address = $_POST['company_address']??null;

$company_address = urlencode($company_address);

if (!empty($company_name) && !empty($company_address)){
   require_once "database.php";
   require_once "getlatlong.php";
    $db = new \Database\database("myitedu");
    $getlatlong = getlatlong($company_address);
    $lat = $getlatlong['results'][0]['geometry']['location']['lat']??null;
    $lng = $getlatlong['results'][0]['geometry']['location']['lng']??null;
    $sql = "INSERT INTO companies (address, lat, lng) VALUES('$company_address','$lat', '$lng');";
    $db->sql($sql);
}

?>
<div class="container-fluid">
    <div id="myform">
        <form method="post">
            <table class="table table-bordered">
                <tr>
                    <td colspan="2">
                        <h4>Submit Your Company</h4>
                    </td>
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td><input name="company_name" type="text" placeholder="Your Company Name"></td>
                </tr>
                <tr>
                    <td>Company Address:</td>
                    <td><input name="company_address" type="text" placeholder="123 Main Street, Brooklyn NY 11229"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button class="btn btn-dark" type="reset">Start over</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<style>
    tr:first-child td, tr:last-child td{
        text-align: center;
    }
</style>
</body>
</html>