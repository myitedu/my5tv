$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });



    $("#btn_send").click(function (){
        triggerSend();
    });

    function triggerSend(){
        let message = $("#your_message").val();
        let owner_user_id = $("#owner_user_id").val();
        let inp_to_user_id = $("#inp_to_user_id").val();
        let data = {
            'owner_user_id': owner_user_id,
            'to_user_id': inp_to_user_id,
            'message': message
        };

        if (message.length==0){
            return false;
        }

        let sent = $.post("create.php", data, function (response){

            window.location = "http://myitedu.uz/projects/chat/index.php?f="+owner_user_id+"&t="+inp_to_user_id;
        });
    }

    function clearChat(){
        let owner_user_id = $("#owner_user_id").val();
        let inp_to_user_id = $("#inp_to_user_id").val();
        let data = {
            'owner_user_id': owner_user_id,
            'to_user_id': inp_to_user_id,
        };
        let sent = $.post("clearchat.php", data, function (response){
            window.location = "http://myitedu.uz/projects/chat/index.php?f="+owner_user_id+"&t="+inp_to_user_id;
        });
    }



    $(".user_list").click(function (){
       let user_id = $(this).data('user_id');
       let owner_user_id = $("#owner_user_id").val();
       if (user_id == owner_user_id){
           return false;
       }
       document.location = "index.php?f="+owner_user_id+"&t="+user_id;
    });


    window.addEventListener("contextmenu", e => {
        const origin = {
            left: e.pageX,
            top: e.pageY
        };

        //console.log(origin.left);
        //e.preventDefault();
    });


    $("#your_message").keyup(function(event) {
       // $(".msg_card_body").html(event.keyCode);
        if (event.keyCode === 13) {
            triggerSend();
        }
    });

    $("#btn_clear_chat").click(function (){
       clearChat();
    });


    $("#inpt_user_search").keydown(function (){
       let keyword = $(this).val();
        let data = {
            'keyword': keyword,
        };
       if (keyword.length>2) {
           let sent = $.post("search_users.php", data, function (response){
               if (response) {
                   $(".contacts").html(response);
               }else{
                   $(".contacts").html("There is no user by that keyword");
               }
           });
       }
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })


});




