<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
require_once "database.php";
$db = new \Database\database("myitedu");
$sql =  "SELECT 
t.id as truckid,
tl.id as truckloadsid,
tl.truck_id, t.name as truck_company,
t.driver_name,
tl.to, tl.from, tl.distance,
tl.fee, t.name, t.driver_name,
ROUND((tl.distance * tl.fee),2) as cost,
ROUND((tl.distance * tl.fee * 0.08),2) as taxes,
ROUND((tl.distance * tl.fee),2) - ROUND((tl.distance * tl.fee * 0.08),2) as profit 
FROM truckloads AS tl
JOIN trucks as t
ON tl.truck_id = t.id;";
$loads = $db->sql($sql);
?>

<h3>Truck Loads</h3>
<div id="myloads">
    <form action="backend.php" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Truck ID</th>
                <th>Truck Company</th>
                <th>Driver Name</th>
                <th>From City</th>
                <th>To City</th>
                <th>Distance</th>
                <th>Fee</th>
                <th>Tax</th>
                <th>Profit</th>
                <th>Delete</th>
            </tr>
            <?php
            foreach ($loads as $load){
                ?>
                <tr>
                    <td><?php echo $load['truck_id'];?></td>
                    <td><?php echo $load['truck_company'];?></td>
                    <td><?php echo $load['driver_name'];?></td>
                    <td><?php echo $load['from'];?></td>
                    <td><?php echo $load['to'];?></td>
                    <td><?php echo $load['distance'];?> miles</td>
                    <td>$<?php echo $load['fee'];?></td>
                    <td>$<?php echo $load['taxes'];?></td>
                    <td>$<?php echo $load['profit'];?></td>
                    <td><button data-truckloadsid="<?php echo $load['truckloadsid'];?>" data-truckid="<?php echo $load['truckid'];?>" class="btn btn-danger btn_delete">Delete</button></td>
                </tr>
                <?php
            }
            ?>



            <tr>

                <td>&nbsp;</td>
                <td><input name="truck_company" placeholder="Truck Company"></td>
                <td><input name="driver_name" placeholder="Driver Name"></td>
                <td><input name="from" placeholder="From City"></td>
                <td><input name="to" placeholder="To City"></td>
                <td><input name="distance" placeholder="Distance"></td>
                <td><input name="fee" placeholder="Fee"></td>
                <td colspan="2"><button class="btn btn-danger">Calculate</button></td>
            </tr>


        </table>
    </form>
</div>


<style>
    #myloads{
        width: 99%;
        margin: auto;
        background-color: #f0f0f0;
        overflow: auto;
    }
    body{
        background-color: darkolivegreen;
    }

    td{
        width: 60px;
    }

</style>


<script>
    $(function () {
        $(".btn_delete").click(function () {
           var truckloadsid = $(this).data('truckloadsid');
           var truckid = $(this).data('truckid');
            var parms = {'truckloadsid':truckloadsid, 'truckid':truckid};
           $.post('delete.php', parms, function (response) {
               document.location =  "index.php";
           });
           return false;

        });
    });
</script>

</body>
</html>