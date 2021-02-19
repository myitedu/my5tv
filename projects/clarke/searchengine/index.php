<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<div id="searchgine">
    <div class="logo"><img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png"> </div>
    <div class="myinput">
        <form>
            <div id="microphone_button"></div>
            <div id="reset_form">X</div>
            <input id="myinput" name="keyword" type="text">
            <div id="suggestions"></div>
        </form>
    </div>
    <div class="mybuttons">
        <button class="btn" type="submit">Google Search</button>
        <button class="btn" type="submit">I'm Feeling Lucky</button>
    </div>
</div>

<style>
    #reset_form{
        cursor: pointer;
    }
    #suggestions{
        display: none;
        padding: 10px;
        text-align: left;
        width: 89%;
        height: 200px;
        background-color: #f1f1f1;
        position: relative;
        left: 47px;
        top: 0px;
        z-index: 55;
        overflow: auto;
    }
    #microphone_button{
        width: 50px;
        height: 50px;
        position: relative;
        left: 710px;
        top: 85px;
        z-index: 100;
        cursor: pointer;
    }

    #reset_form{
        width: 50px;
        height: 50px;
        position: relative;
        left: 690px;
        top: 97px;
        z-index: 100;
        cursor: pointer;
        display: none;
    }

    .mybuttons button:hover{
        border: 1px solid #d0cdcd;
        border-radius: 10px;
        background-color: #0e7138;
        color: yellow;
    }

    .mybuttons button{
        border: 1px solid #d0cdcd;
        border-radius: 10px;
        z-index: 50;
    }

    .mybuttons{
        margin-top: 30px;
    }
    .myinput input{
        width: 90%;
        border-radius: 10px;
        height: 40px;
        margin-top: 40px;
        border: 1px solid #838383;
        background:url("https://cdn2.iconfinder.com/data/icons/iconslandplayer/PNG/256x256/PlainBlue/MicrophonePressed.png");
        background-position: 540px -30px;
        background-repeat: no-repeat;
        background-position: 690px 3px;
        background-repeat: no-repeat;
        background-size: 32px;
        z-index: 60;
    }
    .logo img{
        width: 33%;
    }
    #searchgine{
        text-align: center;
        width: 800px;
        height: auto;
        margin: 40px auto;
    }

    .found_items:hover{
        background-color: #e28a8a;
        color: yellow;
        cursor: pointer;
    }
    .found_items img{
        width: 10px;
        height: 10px;
        border-radius: 4px;
        border: 1px solid black;
    }
</style>

<script>
    $(function (){
        $("#microphone_button").click(function (){
            let ask = confirm("Are you sure you want to go to Google?");
            if (ask){
                document.location = "http://google.com";
            }

        });
        $("#myinput").keyup(function (){
           let keyword = $(this).val();
           if (keyword.length>2) {
               let parms = {keyword:keyword};
               $.post("backend.php", parms, function(response){
                   $("#suggestions").fadeIn('slow').html(response);
               });
           }else{
               $("#suggestions").fadeOut('slow').empty();
               $("#reset_form").fadeOut('slow');
           }

            if (keyword.length>5) {
                $("#reset_form").fadeIn('slow');
            }else{
                $("#reset_form").fadeOut('slow');
            }

        });

        $(document).on('click','.found_items',function(){
            let item = $(this).text();
            $("#myinput").val(item);
            $("#suggestions").hide();
            $("#reset_form").fadeOut('slow');
        });

        $("#reset_form").click(function (){
            $("#myinput").val('');
            $("#suggestions").hide();
            $(this).hide();
        })

    })
</script>

</body>
</html>
