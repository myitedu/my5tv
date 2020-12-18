<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<p>
    <label for="vol">Resize the image:</label>
    0% <input id="input_size" type="range" value="0" id="vol" name="vol" min="0" max="100"> 100%
</p>
<p>
    <label for="vol">Resize the image border:</label>
    0% <input id="input_border_size" type="range" value="0" id="vol" name="vol" min="0" max="100"> 100%
</p>
<p>
    <label for="vol">Pick the color for border:</label>
    <input id="input_border_color" type="color" value="darkred" name="border_color">
</p>
<p>
    Select Border Type:
    <select id="border_types">
    <option value="solid">Solid</option>
    <option value="dotted">Dotted</option>
    <option value="double">Double</option>
    <option value="dot-dash">Dot-Dash</option>
    </select>
</p>
<hr>
<div id="display_result">10%</div>
<img class="stadium" src="https://www.fcbarcelona.com/fcbarcelona/photo/2018/06/05/f75f12df-22a6-4839-ad61-86c45e58e377/13-14_wallpaper_camp-nou_001_cat.v1382006897.jpg">

    <script>
        $(function (){
            $("#input_size").click(function (){
                let size = $(this).val();
                $("#display_result").html(size);
                $(".stadium").css("width",size+"%");
            });
            $("#input_border_size").click(function (){
                let size = $(this).val();
                $(".stadium").css("border",size+"px solid darkred");
            });
            $("#input_border_color").change(function (){
                let color = $(this).val();
                $(".stadium").css("border-color",color);
            });

            $("#border_types").change(function (){
                let btype = $(this).val();
                $(".stadium").css("border-style",btype);
            });
        });
    </script>

<style>
    .stadium{
        border: 1px solid darkred;

    }
    .stadium{
        width: 100%;
    }
</style>
</body>
</html>