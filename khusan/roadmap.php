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
$keyword = $_GET['keyword']??null;
$filter = $_GET['filter']??'country';

$con = new \Database\database('dbq');
if ($keyword){
    $sql = "SELECT * FROM airports WHERE $filter like '%$keyword%' order by country asc;";
}else{
    $sql = "SELECT * FROM airports limit 50;";
}

$airports = $con->sql($sql);
?>
<div id="airports">
    <div class="myform">
        <form>
            <p>Search: <input value="<?php echo $keyword;?>" type="text" name="keyword" placeholder="Your keyword">
                By:
                <select name="filter" id="filter">
                    <option value="city">City</option>
                    <option value="country">Country</option>
                    <option value="name">Airport Name</option>
                </select>
            <button id="btn_go" class="btn btn-info" type="submit">GO</button>
            </p>
        </form>
    </div>
    <table class="table table-bordered mytable">

        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Name</th>
        </tr>

        <?php foreach ($airports as $airport): ?>
        <tr>
            <td><?php echo $airport['id'];?></td>
            <td><?php echo $airport['city'];?></td>
            <td><a target="_blank" href="https://en.wikipedia.org/wiki/<?php echo $airport['country'];?>"><?php echo $airport['country'];?></a></td>
            <td><?php echo $airport['name'];?></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>


<style>

    tr:hover{
        background-color: darkgoldenrod;
        color: yellow;
        cursor: pointer;
    }

    th{
        background-color: darkred;
        color: gold;
        text-align: center;
    }

    .mytable{
        width: 90%;
        margin: auto;
        background-color: #ffffffd1;
        border: 2px solid black;
    }

    .btn-info{
        color: #08693c;
        background-color: #bb9003;
        border-color: #5f4509;
    }

    .myform{
        text-align: center;
        padding-top: 15px;
        color: yellow;
    }
    #airports{
        width: 800px;
        height: auto;
        background-color: #edcbbf;
        margin: 60px auto;
        padding-bottom: 30px;
        border-radius: 20px;
        border: 5px solid #450000;
        background-image: url("https://st2.depositphotos.com/6518310/9965/v/950/depositphotos_99656256-stock-illustration-travel-air-plane-seamless-pattern.jpg");
    }
    body{
        background-color: #7b3d1d;
    }
</style>

<script>
    $(function () {
        $("#btn_go").click(function () {
            let ask = confirm("Are you sure you want to run this search?");
            if (!ask){
                return false;
            }
        });
    });
</script>

</body>
</html>