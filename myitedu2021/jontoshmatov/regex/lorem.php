<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lorem Ipsum</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/february27.css">
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
$text = file_get_contents("lorem");

$find_pattern = "#$keyword#i";
$replace_pattern = "<span class='highlighted_words'>$0</span>";
if (empty($keyword)) {
    $newtext = $text;
    $total = 0;
}else{
    $newtext = preg_replace($find_pattern, $replace_pattern, $text, -1, $total);
}
?>
<div class="seach_form">
    <form>
        <p><h4>Our Search Text Function</h4></p>
        <p><?php
            if (!empty($keyword)){
                echo "<hr>There are total of $total <span class='highlighted_words'>$keyword</span> found<hr>";
            }

            ?></p>

        <p>Search: <input value="<?=$keyword;?>" name="keyword" type="text" placeholder="Your keyword">
        <button class="btn btn-success" type="submit">GO</button>
        </p>
    </form>
</div>
<div class="mytext">
    <?=$newtext;?>
</div>
<style>
    .highlighted_words{
        background-color: yellow;
        color: red;
        padding: 3px;
        font-weight: bolder;
    }
    .seach_form{
        text-align: center;
        color: antiquewhite;
    }
    .mytext{
        width: 90%;
        margin: 30px auto;
        border: 4px double black;
        padding: 5px;
        background-color: lightblue;
    }
    body{
        background-color: #440644;
    }
</style>
</body>
</html>
