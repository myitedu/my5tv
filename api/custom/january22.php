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
$keyword = $_GET['keyword']??null;
require_once "callapi.php";
$results = mening_api($keyword);
$jon = json_decode($results,1);
?>
<div id="form">
    <form>
        <p>
            Search: <input value="<?php echo $keyword;?>" name="keyword" type="text" placeholder="Your keyword">
        <button type="submit">GO</button>
        </p>
    </form>
</div>
<div id="result">

    <p class="results_details">
        <?php
        $max = $jon??[];
        echo "<pre>";
        print_r($max??null);
        echo "</pre>";
        ?>
    </p>


    <table class="table table-bordered">
    <?php
    $items = $jon['items']??[];
    foreach ($items as $num=>$item){
        $num++;
        ?>
        <tr>
            <td><?php echo $num;?></td>
            <td>
                <p><?php
                    $src = $item['pagemap']['cse_thumbnail'][0]['src']??null;
                    if ($src){
                        echo "<img class='result_icon' src='$src'>";
                    }
                ?></p>
                <p><?=$item['title'];?></p>
                <p><?=$item['htmlSnippet'];?></p>
                <p><a target="_blank" href="<?=$item['htmlFormattedUrl'];?>"><?=$item['displayLink'];?></a> </p>
            </td>
        </tr>
        <?php
    }
        ?>
    </table>

    <div id="pagination">
        <nav aria-label="...">
                <ul class="pagination justify-content-center">
                <!-- ######  Previous Page ###### -->
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>

                <!-- ######  Page 1 ###### -->
                <li class="page-item"><a class="page-link" href="#">1</a></li>

                <!-- ######  Current Page ###### -->
                <li class="page-item active" aria-current="page">
                    <span class="page-link">2</span>
                </li>
                <!-- ######  Page 3 ###### -->
                <li class="page-item"><a class="page-link" href="#">3</a></li>

                <!-- ######  Next Page ###### -->
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>


            </ul>
        </nav>
    </div>

</div>
<style>

    .result_icon{
        width: 250px;
        margin: 10px;
        padding: 5px;
        background-color: darkgray;
        border: 1px double black;
    }
    #result{
        text-align: left;
    }
    #form{
        text-align: center;
        margin: 30px;
        border-bottom: 2px solid darkgray;
    }
    .results_details{
        text-align: center;
    }
</style>
</body>
</html>
