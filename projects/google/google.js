$(function (){
   //my_search_microphone_icon click function

    $(".my_search_microphone_icon").click(function (){
       let ask = confirm("Are you sure that you want to use microphone?");
       if (ask){
           document.location = "http://google.com";
       }
    });

    $(".my_input").change(function (){
        let text = $(this).val();
        search_keyword(text);
    })

    $(".my_input").keyup(function (){
        let text = $(this).val();
        search_keyword(text);
    })

    $(document).on("click",".suggestion_result_p",function() {
        let keyword = $(this).text();
        $(".my_input").val(keyword);
        $(".my_suggestion_box").fadeOut("slow");
        redirect_to_google(keyword);
    });

    function search_keyword(keyword){
        if (keyword.length>2){
            $.post("backend.php", {keyword:keyword}, function (result){
                $(".my_suggestion_box").fadeIn('slow').html(result);
            });
        }else{
            $(".my_suggestion_box").fadeOut('fast');
        }
    }

    $("#btn_search").click(function (){
       let keyword = $(".my_input").val();
       redirect_to_google(keyword);
    });

    function redirect_to_google(keyword){
        if (keyword.length>3){
            document.location = "https://www.google.com/search?q="+keyword;
        }
    }

})