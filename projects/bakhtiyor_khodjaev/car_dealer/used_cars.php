<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
include_once "database.php";
$db = new \Database\database('myitedu');
$sql = "SELECT * FROM cars WHERE year <=2021 and miles <=200";
$cars = $db->sql($sql);
$cars = $cars[0]??null;
?>

<div id="newcar">
    <div class="newcar_title">USED CARS LIST</div>
    <div class="newcar_list">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>IMAGE</th>
                <th>DESCRIPTION</th>
                <th>MAKE</th>
                <th>MODEL</th>
                <th>YEAR</th>
                <th>MILE</th>
                <th>PRICE</th>
            </tr>
            <?php
            foreach ($cars as $car){
                ?>
                <tr>
                    <td><?php echo $car['id']?></td>
                    <td><img class="carimg" src="<?php echo $car['image']?>"></td>
                    <td><?php echo $car['description']?></td>
                    <td><?php echo $car['make']?></td>
                    <td><?php echo $car['model']?></td>
                    <td><?php echo $car['year']?></td>
                    <td><?php echo $car['miles']?></td>
                    <td><?php echo $car['price']?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

</body>
<style>
    .carimg{
        width: 70px;
        border: 3px solid black;
        border-radius: 10px;
    }
    .newcar_list{
        text-align: center;
    }
    .newcar_title{
        text-align: center;
        font-size: 25px;
        font-family: "Times New Roman";
        margin: 20px;
    }
    #newcar{
        width: 1000px;
        height: 600px;
        border: 3px solid darkgray;
        border-radius: 10px;
        margin: 50px auto;
        background-color: whitesmoke;
    }
    body{
        background-color: #7abaff;
    }
</style>
</html>
