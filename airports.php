<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The world airports</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
require_once "database.php";
$keyword = $_GET['keyword']??null;
$db = new \Database\database("myitedu");
$sql = "SELECT id, name, city, country FROM airports WHERE 
country like '%$keyword%' or city like '%$keyword%' and details not like '%No Airport found%';";
$airports = $db->sql($sql);
?>
<div class="container-fluid mycontainer">
    <h4>The world Airports</h4>
    <hr>
    <p>There are <?=count($airports)?> airports found by that keyword: </p>

    <p>
    <form>
    <label>
        Search: <input value="<?=$keyword?>" name="keyword" type="text" placeholder="Enter your city or country">
        <button type="submit">GO</button>
    </label>
    </form>
    </p>

    <table class="table table-bordered">

        <tr>
            <th>Photo</th>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
        </tr>

        <?foreach ($airports as $airport):?>

        <tr>
            <td><img class="airport_logo" src="https://www.shareicon.net/data/512x512/2016/08/18/809778_airport_512x512.png"> </td>
            <td><?=$airport['id'];?></td>
            <td>
                <a target="_blank" href="https://www.google.com/search?q=<?=$airport['name'];?>"><?=$airport['name'];?></a></td>
            <td><?=$airport['city'];?></td>
            <td><?=$airport['country'];?></td>
        </tr>

        <?endforeach;?>

    </table>
</div>

<style>

    .airport_logo{
        width: 40px;
    }

    th{
        background-color: darkred;
        color: #e0a800;
    }

    .mycontainer{
        text-align: center;
        background-color: floralwhite;
        margin: auto;
        width: 90%;
        border: 3px solid #011836;
        border-radius: 20px;
        margin-top: 20px;
        box-shadow: 5px 5px 5px 5px #053270;

    }

    body{
        background-color: #0e52b0;
    }
    
    tr:hover{
        background-color: #e0a800;
        color: darkred;
        cursor: pointer;
    }

</style>

</body>
</html>
