<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../../js/jquery-3.5.1.js"></script>
</head>
<body>
<form>
    <h3>Search Your City</h3>
    <label>City:<input type="text" name="city" id="myinput" placeholder="Your City"></label>
    <div id="suggestions">
        Samara
    </div>
</form>

<style>

    .city_item:hover{
        background-color: darkred;
        color: yellow;
        cursor: pointer;
    }

    #suggestions{
        width: 170px;
        height: 100px;
        background-color: #eee9e9;
        border: 1px dotted darkgray;
        position: absolute;
        left: 40px;
        top: 82px;
        display: none;
        overflow: auto;
    }
</style>

<script>
    $(function (){

        $("#myinput").keydown(function (){
           let keyword = $(this).val();
           if (keyword.length>3){
               let parms = {keyword:keyword};
               $.post("backend.php", parms, function(result){
                   $("#suggestions").show().html(result);
               });
           }

        });

        $(document).on('click','.city_item',function(){
            let city = $(this).text();
            $("#myinput").val(city);
            $("#suggestions").hide();
        });





    })
</script>
</body>
</html>
