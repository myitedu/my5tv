<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function (){
            $( ".santa" ).draggable();
        })

        let jon = setInterval(call_me, 1000);
        let counter = 0;
        function call_me(){
            counter++;
            let num = Math.floor(Math.random() * 100);
            $('.santa').stop().animate({
                left: '-=100px',
                top: '+='+num+'px'
            });

            $(".basketball").stop().animate({
                left: '-=100px',
                top: '+='+num+'px'
            });

/*
            $('.santa').stop().animate({
                top: '-='+num+'px'
            });
            $('.santa').stop().animate({
                top: '+='+num+'px'
            });

 */




            let position = $('.santa').position();
            let leftp = position.left;
            let topp = position.top;
            if (leftp<260){

                $('.santa').stop().animate({
                    left: '+=10'+num+'px'
                });
                $('.santa').css("top",""+num+"px");

                $(".basketball").stop().animate({
                    left: '=100px',
                    top: '=100px'
                });
                return false;
            }
            if (top>500){
                $('.santa').stop().animate({
                    top: '-='+num+'px',
                    left: '-=100px'
                });
                $('.santa').css("top",""+num+"px");
                $(".basketball").stop().animate({
                    left: '=100px',
                    top: '='+num+'px'
                });
            }
            console.log(topp);
        }


    </script>
</head>
<body>
<img class="basketball" src="https://thumbs.gfycat.com/RingedSlushyAmericantoad-small.gif">
<div class="container-fluid">
    <div id="jon">
        <div id="myheader">
            <?php
            include_once "navbar.php";
            ?>
        </div>
        <div>
            <img class="santa" src="https://www.animatedimages.org/data/media/359/animated-santa-claus-image-0420.gif">

            <audio class="myaudio" controls>
                <source src="../../audio/jingle-bells-country.mp3" type="audio/mpeg">
                Your browser does not support the audio tag.
            </audio>

            <nav aria-label="breadcrumb" class="mybreadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                    <li class="breadcrumb-item active" aria-current="page"><button id="mybtn" class="btn btn-success">Move</button></li>
                </ol>
            </nav>


        </div>
    </div>
    <div id="mycontent">
        What is Lorem Ipsum?
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        Why do we use it?
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


        Where does it come from?
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

        Where can I get some?
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.

        5
        paragraphs
        words
        bytes
        lists
        Start with 'Lorem
        ipsum dolor sit amet...'

    </div>
</div>
<div class="snow_on_bottom">
    <img id="santa2" src="../../img/kids_playing_snow.png">
</div>
<script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
