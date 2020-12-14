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
<?php
for($i=0; $i<10; $i++) {
    echo "<div class='numbers' data-number='$i'>Number $i</div>";
}
    ?>
<style>
    .numbers{
        background-color: #5890ff;
        margin: 10px;
        width: 70px;
        padding:10px;
        display: inline-block;
        cursor: pointer;
    }
</style>
<script>
    $(function (){
        $(".numbers").click(function (){
           let number = $(this).data("number");
           alert("You clicked on: "+number);
        });
    });
</script>

</body>
</html>