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
<div id="ota">
<script>
    let cities = ['Dubai','Paris','London','Tokyo','Tashkent','New York'];
    let images = [
        'https://images.adsttc.com/media/images/60b6/09d7/f91c/8199/fb00/00cd/newsletter/shutterstock_1196821240.jpg?1622542766',
        'https://lp-cms-production.imgix.net/image_browser/Effiel%20Tower%20-%20Paris%20Highlights.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850',
        'https://www.syracuse.edu/wp-content/uploads/london-large-image-1100x733.jpg',
        'https://faelasufa.files.wordpress.com/2015/12/ginza.jpg',
        'https://media.tacdn.com/media/attractions-splice-spp-674x446/07/ae/e9/25.jpg',
        'https://media.tacdn.com/media/attractions-splice-spp-674x446/09/1f/f7/af.jpg'
    ];

    let number = 0;
    for(let i=0; i<cities.length; i++) {
        number++;
        let text = "<div style='background-image: url(\""+images[i]+"\")' class=\"mybox\"><div class=\"title\">Welcome to "+cities[i]+"!</div><span class=\"number\">"+number+"</span></div>";
        document.write(text);
    }
</script>
<div id="mymenu">
    Select Background Color: <input id="select_color" type="color">
    <br>
    <br>
    <br>
    <button id="button1">DO SOMETHING</button>
    <button id="button2">Reset</button>
</div>
</div>

<style>
    #ota{
        text-align: center;
    }
    .number{
        background-color: yellow;
        color: red;
        padding: 10px;
        border: 1px solid darkslateblue;
        border-radius: 20px;
        position: relative;
        top: 6px;
        left: 0px;
    }
    #mymenu{
        width: 100%;
        margin: 50px auto;
        text-align: center;
        background-color: lightblue;
    }
    .title{
        width: 100%;
        height: 30px;
        background-color: #ffc0cba3;
        position: relative;
        top: 85px;
        text-align: center;
        line-height: 30px;
        font-size: 22px;
        color: #730707b8;
        border-top: 3px solid darkblue;
        border-bottom: 3px solid darkblue;
        text-shadow: white 2px 2px;
    }
    .mybox{
        width: 200px;
        height: 200px;
        background-color: #0a53be;
        margin: 10px;
        display: inline-block;
        background-size: cover;
        border: 2px solid darkmagenta;
        border-radius: 20px;
        cursor: pointer;
    }
</style>

<script>
    $(function () {

        $("#button2").click(function () {
            $(".mybox").fadeIn("slow");
        });


        $(".mybox").click(function () {
            $(this).fadeOut("slow");
        });


        $("#select_color").change(function () {
            let color = $(this).val();
            $('body').css("background-color",color);
        })


        $("#button1").click(function () {
            action = prompt("What do you want to do?");

            if (action == 'hide'){
                img_number = prompt("Which image do you want to " + action);
                img_number--;
                $(".mybox").eq(img_number).hide();
            }
            if (action == 'show'){
                img_number = prompt("Which image do you want to " + action);
                img_number--;
                $(".mybox").eq(img_number).show();
            }
            if (action == 'color'){
                let color = prompt("What color do you want to change it?");
                $('body').css("background-color",color);
            }
        });
    });
</script>

</body>
</html>