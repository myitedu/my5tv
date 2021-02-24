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
<div class="container-fluid">
    <div class="result"></div>
    <hr>
    <div class="result2"></div>
    <hr>
    <button id="click_me" class="btn btn-success">CLICK ME</button>
    <button id="copy" class="btn btn-info">COPY</button>
    <button id="erase" class="btn btn-danger">ERASE</button>
    <button id="one_time" class="btn btn-dark">ONE TIME CLICK</button>
    <button id="show_hide" class="btn btn-danger">HIDE RESULT</button>
    <button id="edit" class="btn btn-info">EDIT RESULT</button>
    <button id="save" class="btn btn-success">SAVE RESULT</button>
    <hr>

    <form enctype="multipart/form-data">
        SELECT YOUR FILE: <input id="your_file" name="your_file" type="file">
        <br>
        <button id="upload" type="button" class="btn btn-info">UPLOAD</button>
    </form>

</div>
<style>

    .hide_result{
        background-color: purple !important;
    }

    .show_result{
        background-color: #c15c1a !important;
    }

    .result, .result2{
        width: 80%;
        height: 200px;
        margin: 10px auto;
        border: 1px solid black;
        background-color: lightgrey;
        padding: 5px;
        overflow: auto;
    }

    .container-fluid{
        text-align: center;
    }
</style>
<script>
    $(function (){

        $("#click_me").click(function (){
            let text = "What is Lorem Ipsum?\n" +
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum" +
                "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
            $(".result").html(text);
        });

        $("#copy").click(function (){
            let text =  $(".result").html();
            $(".result2").html(text);
        });

        let is_first_erased = false;

        $("#erase").click(function (){

           if (!is_first_erased) {
               $(".result").empty();
                is_first_erased = true;
                return false;
           }

           if (is_first_erased) {
               $(".result2").empty();
               return false;
           }


        });

        $("#one_time").click(function (){
           $(this).text("CLICKED ALREADY").removeClass("btn-dark").addClass("btn-info");
        });

        $("#show_hide").click(function (){

            let is_hidden = $(".result2").css("display");

            if (is_hidden=='block'){
                $(".result2").fadeOut("slow");
                $(this).text("SHOW RESULT").removeClass("hide_result").addClass("show_result");
            }else{
                $(".result2").fadeIn("slow");
                $(this).text("HIDE RESULT").removeClass("show_result").addClass("hide_result");
            }

        });

        $("#edit").click(function (){
           $(".result2").attr("contenteditable", true).css("background-color","white");
        });

        $("#save").click(function (){
            $(".result2").attr("contenteditable", false).css("background-color","lightgrey");
        });

        /*        $("#upload").click(function (event){

            console.log(event.target);

            return false;
             let your_file = $("#your_file").attr('src',URL.createObjectURL(event.target.files));
             let text = "<img src='"+your_file+"'>";
             $(".result2").html(text);
        });*/

        $("#your_file").change(function() {
            var length = this.files.length;
            if (!length) {
                return false;
            }
            useImage(this);
        });



    });

    // Creating the function
    function useImage(img) {
        var file = img.files[0];
        var imagefile = file.type;
        var match = ["image/jpeg", "image/png", "image/jpg"];
        if (!((imagefile == match[0]) || (imagefile == match[1]) || (imagefile == match[2]))) {
            alert("Invalid File Extension");
        } else {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(img.files[0]);
        }

        function imageIsLoaded(e) {
            let html = "<img src='"+e.target.result+"'>";
            //$(".result2").css({ 'background-image': "url(" + e.target.result + ")" });
            console.log(html);
            $(".result2").html(html);

        }
    }


</script>

</body>
</html>