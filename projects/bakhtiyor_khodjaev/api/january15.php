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
<div class="container-fluid">
<div id="hotels">
    <p>Hotels Search</p>
    <hr>
    <form method="get" action="api.php">
        <p>
            Search:
            <select id="keyword" name="city_name">
                <option value="New York">New York</option>
                <option value="Chicago">Chicago</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Other">Other</option>
            </select>
            <input id="keyword2" name="city_name2" type="text" placeholder="City name">
            <button type="submit">Search</button>
        </p>
    </form>
</div>
</div>
<style>
#keyword2{
    display: none;
}
</style>

<script>
    $(function (){
      $("#keyword").change(function (){
         let value = $(this).val();
         if (value == 'Other'){
             $("#keyword2").fadeIn("slow");
         }else{
             $("#keyword2").fadeOut("fast");
         }
      });
    });
</script>
</body>
</html>