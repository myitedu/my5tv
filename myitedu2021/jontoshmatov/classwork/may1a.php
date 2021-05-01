<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>

<div class="classwork">

    <div data-id="1" class="bar">A</div>
    <div class="child child1">
        <ul>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
        </ul>
    </div>
    <div data-id="2" class="bar">B</div>
    <div class="child child2">
        <ul>
            <li>One</li>
            <li>Two</li>
            <li>Three</li>
        </ul>
    </div>
    <div data-id="3" class="bar">C</div>
    <div data-id="4" class="bar">D</div>


</div>

<script>
    $(function () {
        $(".bar").click(function () {
            var id = $(this).data('id');
            $(".child").hide();
            $(".child"+id).toggle();
        });
    });
</script>

<style>
    .child{
        width: 65%;
        margin: 20px auto;
        background-color: #633da0;
        border: 1px solid darkgreen;
        padding: 5px;
        color: gold;
        font-size: 30px;
        position: relative;
        left: 123px;
        display: none;
    }
    .bar{
        width: 90%;
        margin: 20px auto;
        background-color: #402a6a;
        border: 1px solid darkgreen;
        padding: 5px;
        color: gold;
        font-size: 30px;
        cursor: pointer;
    }
    .classwork{
        width: 1000px;
        height: auto;
        background-color: aliceblue;
        color: #900048;
        margin: 100px auto;
        border: 4px double darkblue;
    }
    body{
        background-color: black;
    }
</style>

</body>
</html>