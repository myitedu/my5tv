<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<h3>My own browser</h3>
<div class="form-group">
    <label for="exampleInputEmail1">URL</label>
    <input type="url"  id="url">
    <button class="btn btn-info" type="button" id="btn_go">GO</button>
</div>


<script>

    $(function (){

        $("#btn_go").click(function (){
            let url = $("#url").val();
            document.location = url;
        });

    });


</script>



</body>
</html>