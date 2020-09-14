<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotels Search</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
$hotels = [];
require_once "api.php";
?>
<div class="container-fluid">
    <div id="hotels">
        <h2>Hotels Search</h2>
        <form>
        <p>
            Search: <input name="location" placeholder="Enter your location"><button>Search</button>
        </p>
        </form>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Caption</th>
                <th>Destionation</th>
            </tr>

            <?php
            foreach ($hotels as $hotel){
            ?>
            <tr>
                <td><?=$hotel['geoId']?></td>
                <td><?=$hotel['name']?></td>
                <td><?=$hotel['caption']?></td>
                <td>Destionation</td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
</div>
<style>
    table{
        background-color: whitesmoke;
    }
    body{
        background-color: #0c5460;
    }
    #hotels{text-align: center;}
    #hotels h2, p{
        color: #44fb78;
    }
</style>
</body>
</html>
