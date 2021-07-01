<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
?>


<div class="container-fluid">
    <div id="result">
        <div id="search_form">
            <h4>Search string in the text</h4>
            <form method="get">
                <p>Search: <input value="<?php echo $keyword;?>" name="keyword" type="text" placeholder="Your Keyword">
                <button type="submit">Search</button>
                </p>
            </form>
        </div>
        <div id="text">
            <?php
            $text = file_get_contents("lorem.txt");
            $pattern = "#$keyword#";
            $replacement = "<span class='found_keyword'>$0</span>";
            $result = preg_replace($pattern, $replacement, $text);

            echo $result;
            ?>
        </div>
    </div>

</div>

<style>


    .found_keyword {
    background-color: yellow;
        padding: 2px;
        color: darkred;
    }

    #text{
        background-color: #f9f9f9;
        margin: 3px;
        padding: 5px;
    }

    #search_form{
        text-align: center;
    }
</style>

</body>
</html>