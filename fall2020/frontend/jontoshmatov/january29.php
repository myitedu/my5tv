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

<button data-dir="left" class="btn_click">LEFT</button>
<button data-dir="right" class="btn_click">RIGHT</button>
<button data-dir="top" class="btn_click">TOP</button>
<button data-dir="bottom" class="btn_click">BOTOOM</button>

<div class="mybox">MY BOX</div>





<script>
    $(function () {
        let mybox = $(".mybox");
        let left = mybox.position().left;
        let top = mybox.position().top;
        let speed = 100;
        /*
        $(".btn_click").click(function(){
           let dir = $(this).data('dir');

           if (dir == 'left'){
               left-=speed;
               mybox.css("left",left+"px");
           }
            if (dir == 'right'){
                left+=speed;
                mybox.css("left",left+"px");
            }
            if (dir == 'top'){
                top-=speed;
                mybox.css("top",top+"px");
            }
            if (dir == 'bottom'){
                top+=speed;
                mybox.css("top",top+"px");
            }

        });
         */


        $("body").keydown(function(event){
            //Left
            if (event.which == 37){
                left-=speed;
                mybox.css("left",left+"px");
            }
            //Top
            if (event.which == 38){
                top-=speed;
                mybox.css("top",top+"px");
            }
            //right
            if (event.which == 39){
                left+=speed;
                mybox.css("left",left+"px");
            }
            //bottom
            if (event.which == 40){
                top+=speed;
                mybox.css("top",top+"px");
            }


        });


        //38 = top
        //40 = bottom
        //37 = left
        //39 = right






    });

</script>


<style>
.mybox{
    background-color: #1d886d;
    padding:5px;
    margin: 5px;
    border: 1px solid black;
    width: 100px;
    height: 100px;
    position: absolute;
}
</style>

</body>
</html>
