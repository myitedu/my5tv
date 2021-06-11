<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<div id="mybox">BOX</div>
<hr>

<hr>
<form id="myform">
    <p>
        How old are you? <br> <input required="required" maxlength="3" min="18" max="99" type="number" class="your_age" name="your_age" placeholder="Your Age">
        <button type="submit" class="btn btn-danger">GO</button>
    </p>
</form>



<script>

    $(function () {

        /*
        $("#btn_click_me").mouseover(function () {
            $("body").css("background-color","#f00");
        });

       */


        $("#myform").submit(function () {
            let age = $(".your_age").val();
            let dob = 2021 - age;
            $("#mybox").html("You were born in " + dob);
            return false;

        });




    });



</script>

</body>
</html>