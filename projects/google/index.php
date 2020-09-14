<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Google Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="google.js"></script>
</head>
<body>
<div class="container-fluid">
    <div id="my_search_engine">
        <div class="google_logo">
            <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png">
        </div>

        <div class="my_search_input">
            <img class="my_search_microphone_icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREB6Cc8Ayr12euUSm7VHCR3IfUVALZAu81Sw&usqp=CAU">
            <input class="my_input" autocomplete="false" name="keyword">
            <div class="my_suggestion_box">

            </div>
        </div>

        <div class="my_search_buttons">
            <button id="btn_search" type="button">Google Search</button>
            <button id="btn_lucky" type="button">I'm Feeling Lucky</button>
        </div>
    </div>
</div>
<style>
    .my_suggestion_box{
        background-color: lightgrey;
        width: 90%;
        margin: auto;
        position: relative;
        left: 22px;
        top: -2px;
        text-align: left;
    }

    .my_search_microphone_icon{
        position: relative;
        z-index: 100;
        width: 40px;
        top: -3px;
        left: 629px;
        cursor: pointer;
    }

    .my_search_buttons{
        text-align: center;
        margin-top: 30px;
    }

    .my_search_buttons button{
        background-color: #f6f6f6;
        border-radius: 10px;
        height: 40px;
        border: 1px solid lightgrey;
    }

    .my_search_input input{
        width: 90%;
        height: 50px;
        border: 1px solid darkgray;
        border-radius: 15px;
        z-index: 99;
        background-image: url("https://lh3.googleusercontent.com/proxy/C9SUzWJowr1v-DMLyl8Pvvtz7-Ll9dmN4M8OvFLIRhcO7XSxYICA7tOb2NuBEZIHdzG6BoKpW7-ClMATx42sTD1bKveOU4fZVOhVz6vFxEkiPQ");
        background-repeat: no-repeat;
        background-size: 50px 40px;
        background-position: 5px 4px;
        padding-left: 60px;
    }

    .my_search_input{
        text-align: center;
        margin-top: 30px;
    }
    .google_logo{
        text-align: center;
    }

    .google_logo img{
        width: 35%;
    }

    #my_search_engine{
        width: 700px;
        height: 300px;
        margin: 150px auto;
    }
    .suggestion_result_icon{
        width: 30px;
    }
    .suggestion_result_p:hover{
        background-color: #f5a402;
        color: green;
        cursor: pointer;
    }
</style>
</body>
</html>