<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once  "database.php";
$db = new \Database\database("myitedu");
$countries = $db->sql("SELECT id, city, country, details FROM airports limit 20;");
?>
<div class="container-fluid">
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Details</th>
        </tr>
        <?php
        foreach ($countries as $country){
        ?>
        <tr>
            <td><?php echo $country['id'];?></td>
            <td><?php echo $country['city'];?></td>
            <td><?php echo $country['country'];?></td>
            <td><?php echo $country['details'];?></td>
        </tr>

        <?php
        }
        ?>
    </table>
</div>
</body>
</html>