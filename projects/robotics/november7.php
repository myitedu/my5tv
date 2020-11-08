<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <h5>My Dynamic Content</h5>
    <hr>
    <div class="left_col"></div>
    <div class="right_col"></div>
    <div class="clearfix"></div>
    <div class="mybuttons">
        <p>
            <input name="keyword" placeholder="Your Keyword" id="inp_keyword">
        </p>
        <button id="btn_create" class="btn btn-info">CREATE</button>
        <button id="btn_copy" class="btn btn-success">COPY</button>
        <button id="btn_save" class="btn btn-dark">SAVE</button>
        <button id="btn_backend" class="btn btn-danger">BACKEND</button>
        <button id="btn_lookup" class="btn btn-success">LOOKUP</button>
    </div>
</div>

<script>
    $(function (){

        let html_text= "What is Lorem Ipsum?\n" +
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\n" +
            "\n" +
            "Why do we use it?\n" +
            "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n" +
            "\n" +
            "\n" +
            "Where does it come from?\n" +
            "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n" +
            "\n" +
            "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\n" +
            "\n" +
            "Where can I get some?\n" +
            "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";


        $("#btn_create").click(function (){
            $(".left_col").html(html_text);
        });

        $("#btn_copy").click(function (){
            let html = $(".left_col").html();
            $(".right_col").html(html);
        });

        $(".left_col").dblclick(function (){
            $(this).attr("contenteditable", true).css("background-color",'lightgray');
        })

        $("#btn_save").click(function (){
            $(".left_col").attr("contenteditable", false).css("background-color",'#2e6da4');
        })


        $(".left_col").keydown(function (){
            let html = $(this).html();
            $(".right_col").html(html);
        })

        $("#btn_backend").click(function (){
           let data = {};
           $.post("/projects/robotics/backend/november7.php", data, function (response){
               $(".left_col").fadeIn("slow").html(response)
           });
        });


        $("#btn_lookup").click(function (){
            let keyword = $("#inp_keyword").val();
            let data = {};

            if (keyword.length>0){
                data = {'keyword':keyword};
            }else{
                data = {};
            }


            $.post("/projects/robotics/backend/api.php", data, function (response){
                $(".right_col").fadeIn("slow").html(response).css("background-color","#9f8585")
            });
        })

    });
</script>


<style>
    .country{
        width: 100px;
        height: 80px;
        border: 1px solid black;
        margin: 10px;
        padding:3px;
        text-align: center;

        font-size: 80%;
        display: inline-block;
        background-color: lightgreen;


    }

    .thumb{
        width: 100px;
    }

    .mybuttons{
        background-color: lightgrey;
        border: 5px solid #3e2f0d;
        padding:20px;
    }
    .container-fluid{
        text-align: center;
    }

    .right_col{
        width: 50%;
        height: 500px;
        background-color: #74049d;
        display: inline-block;
        float: right;
        border: 5px solid #3e2f0d;
        overflow: auto;
    }

    .left_col{
        width: 50%;
        height: 500px;
        background-color: #2e6da4;
        display: inline-block;
        float: left;
        border: 5px solid #3e2f0d;
        overflow: auto;
    }
</style>
</body>
</html>