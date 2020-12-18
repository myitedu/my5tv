<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>November 15, 2020 API</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<div class="container-fluid">
    <div id="mybox">
        <div class="top_col">
            <form>
                <h3>My Search</h3>
                <input id="keyword" placeholder="Your search keyword">
                <button class="btn btn-info" type="button">GO</button>
            </form>
        </div>
        <div class="bottom_col">
            wefwefwefwefwef
        </div>
    </div>
</div>
<style>
    .cardealer th, td{
        border: 1px solid black !important;
    }
    .item_logo{
        width: 150px;
    }
    .bottom_col{
        width: 100%;
        height: 80%;
        background-color: #b1eedf;
        overflow: auto;
        padding: 5px;
    }
    .top_col{
        width: 100%;
        height: 20%;
        background-color: #0362a0;
        text-align: center;
        border-bottom: 5px solid darkred;
    }
    #mybox{
        width: 600px;
        height: 450px;
        margin: 100px auto;
        border: 1px solid black;
        background-color: lightgrey;
    }
</style>
<script>
    $(function (){
        $("#keyword").keyup(function (){
            let keyword = $(this).val();
            let data = {'keyword': keyword};
            $.post('search_api.php', data, function (javob){
                $(".bottom_col").html(javob);
            });
        });
    });
</script>
</body>
</html>