<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>Welcome to 7-Eleven Store!</h3>
<div id="results">
    Results
</div>


<style>
    #results{
        width: 500px;
        margin: auto;
        background-color: wheat;
        border: 1px solid black;
        padding:10px;
    }
    body{
        text-align: center;
    }
</style>

<script>

 let one = 10;
 let two = '10';

 if (one === two){
     document.getElementById("results").innerHTML = "One and two are equal";
 }else{
     alert("they are not equal");
 }



</script>

</body>
</html>