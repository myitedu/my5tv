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
<?php
$nums = [rand(1,200),rand(1,200),30,45,50,60,90,rand(1,200)];
//$nums = array_reverse($nums);
shuffle($nums);
$left = 100;
$height = 200;
?>
<div class="title2">Our Chart</div>
<div id="chart">
    <div class="title">MYITEDU CHART</div>
    <?php
    foreach ($nums as $num){
        $height = $num;
    ?>
    <div style="left: <?php echo $left;?>px; height:<?php echo $height;?>px" class="bar"><?php echo $num;?></div>
    <?php
        $left+=50;
    }
    ?>

    <table class="table">
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
    </table>
</div>

<style>
    .bar{
        width: 30px;
        border: 1px solid grey;
        background-color: #5890ff;
        position: absolute;
        display: block;
        z-index: 100;
        margin-right: 20px;
        bottom: 287px;
    }
    .title2{
        position: relative;
        left: 51px;
        top: 205px;
        writing-mode: vertical-rl;
    }
    .title{
        text-align: center;
        margin-bottom: 20px;
    }
    #chart{
        width: 700px;
        margin: 30px auto;
    }
td:first-child{
    border-left: 2px solid black;
}
tr:last-child td{
    border-bottom: 2px solid black;
}

</style>

</body>
</html>