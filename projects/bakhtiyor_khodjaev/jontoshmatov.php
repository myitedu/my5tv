<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
$cars = "Audi, BMW, Mercedes, Honda, Toyota";
?>
<div class="container-fluid">
    <h4>Bakhriyor Khodjaev Classroom</h4>
    <div class="box box_left">
        <h4>foreach</h4>
        <pre>
            <?php
            $mycars = explode(",", $cars);
              print_r($mycars);
            ?>
        </pre>
    </div>
    <div class="box box_middle">
        <h4>var_export</h4>
       <pre>
        <?php

        ?>
       </pre>
    </div>
    <div class="box box_right">
        <h4>var_dump</h4>
       <pre>
        <?php

        ?>
      </pre>
    </div>
</div>
<style>
    .container-fluid {
        text-align: center;
    }

    .box_right {
        float: right;
        background-color: #c7cae2;
    }

    .box_middle {
        float: left;
        background-color: #c2ecc4;
        width: 34% !important;
    }

    .box_left {
        float: left;
        background-color: #ddbcbc;
    }

    .box {
        width: 33%;
        display: inline-block;
        border: 1px solid black;
        height: 450px;
        text-align: left;
        padding:3px;
        overflow: auto;
    }
</style>
</body>
</html>