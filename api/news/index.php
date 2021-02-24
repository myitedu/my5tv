<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bing News Portal</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
$category = $_GET['category']??'technology';
include "bingnews.php";
$categories = ['technology','business','politics','sports','art','entertainment','world','health'];
?>

<div class="container-fluid">


    <div id="news_title">
        <h4>Our News</h4>
        <form>
            Select Category:
            <select name="category">
                <?php
                foreach ($categories as $cat){
                    $cat_title = ucfirst($cat);
                    if (strtolower($cat) == strtolower($category)) {
                        echo "<option selected value=\"$cat\">$cat_title</option>";
                    }else{
                        echo "<option value=\"$cat\">$cat_title</option>";
                    }
                }
                ?>
            </select>
            <button class="btn btn-success" type="submit">GO</button>
        </form>

    </div>

    <?php
    $news_default_img = 'https://p11cdn4static.sharpschool.com/UserFiles/Servers/Server_131303/Image/News%20images/News%20image%20clipart/News%203.png';
    foreach ($items['value'] as $item){
    ?>
        <article>

        <div class="news_top">
            <div class="news_image"><img src="<?php echo $item['image']['thumbnail']['contentUrl']??$news_default_img;?>"></div>
            <div class="news_title"><?php echo $item['name'];?></div>
            <img class="btn_close" src="https://www.freeiconspng.com/thumbs/close-button-png/close-button-png-26.png">
            <div class="clearfix"></div>
        </div>
        <div class="news_description"><?php echo $item['description'];?></div>
        <div class="news_bottom">
            <div class="news_source_logo">
                <img src="<?php echo $item['provider'][0]['image']['thumbnail']['contentUrl'];?>">
            </div>
            <div class="news_source_links">
                <?php echo $item['provider'][0]['name'];?>
            </div>
            <div class="clearfix"></div>
        </div>

    </article>
    <?php
    }
    ?>


</div>
<style>
    body{
        background-color: black;
        color: wheat;
    }
    #news_title{
        text-align: center;
    }
    .btn_close{
        width: 50px;
        position: relative;
        left: 69%;
        top: -52px;
    }
    .news_source_logo img{
        width: 90px;
        height: 80px;
        border-radius: 50%;
    }
    .news_source_logo{
        display: inline-block;
        width: 25%;
        padding: 5px;
        float: left;
        text-align: center;
    }

    .news_source_links{
        display: inline-block;
        width: 75%;
        padding: 5px;
        float: right;
        padding-top: 20px;

    }

    .news_bottom{
        width: 100%;
        height: auto;
        background-color: #dddbf1;
    }

    .news_description:first-letter{
        font-size: 35px;
        font-family: "Lucida Handwriting";
        font-weight: bolder;
        color: rebeccapurple;
    }

    .news_description{
        background-color: #ffffff;
        padding:5px;
    }
    .news_image img{
        width: 150px;
        height: 120px;
        border: 2px double darkblue;
    }
    .news_image{
        display: inline-block;
        width: 25%;
        padding: 5px;
        float: left;
        text-align: center;
    }

    .news_title{
        display: inline-block;
        width: 75%;
        padding: 5px;
        float: right;
        padding-top: 20px;
    }
    .news_top{
        height: auto;
        border-bottom: 1px dotted black;
    }

    article{
        width: 80%;
        height: auto;
        margin: auto;
        background-color: #d1c9f0;
        border: 1px solid darkgrey;
        border-radius: 11px;
        padding: 10px;
        margin-bottom: 20px;
        color: black;
    }
</style>
</body>
</html>