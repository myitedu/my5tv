<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <title>The world airports</title>
</head>
<body>
<?php
include_once "airports_backend.php";
?>
<div class="container-fluid">

    <div class="searchform">
        <h3>The world airports</h3>
        <form method="get">
            <p>
                <label>Search: </label>
                <input value="<?=$keyword??null;?>" name="keyword" type="text" placeholder="Your Keyword">
                <select name="selected_type">
                    <option value="city">City</option>
                    <option selected value="country">Country</option>
                    <option value="details">Address</option>
                    <option value="code">Code</option>
                </select>
                <button type="submit">Search</button>
            </p>
            <hr>
            <p>
                There are <?=$total;?> airports found by that keyword
            </p>
        </form>
    </div>
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>
        <?foreach ($airports as $airport):?>
        <tr>
            <td><?=$airport['id']?></td>
            <td><?=$airport['city']?></td>
            <td><?=$airport['country']?></td>
            <td><?=$airport['code']?></td>
        </tr>
        <?endforeach;?>

    </table>
</div>
<style>
    table{
        background-color: white;
        box-shadow: #06162b 5px 5px 5px 5px;
    }
    body{
        background-color: #0c5460;
    }
    .searchform{
        text-align: center;
        color: whitesmoke;
    }
    th{
        background-color: darkred;
        color: #bdbd07;
    }

    tr:nth-child(odd){
        background-color: #f5f5f5;
    }
    tr:hover{
        background-color: #e3c9c9;
        cursor: pointer;
    }
</style>
</body>
</html>