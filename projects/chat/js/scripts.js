$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });



    $("#btn_send").click(function (){
        let message = $("#your_message").val();
        let owner_user_id = $("#owner_user_id").val();
        let inp_to_user_id = $("#inp_to_user_id").val();
        let data = {
            'owner_user_id': owner_user_id,
            'to_user_id': inp_to_user_id,
            'message': message
        };

        let sent = $.post("create.php", data, function (response){
                document.location = "http://myitedu.uz/projects/chat/index.php?f="+owner_user_id+"&t="+inp_to_user_id;
        });
    });

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

        console.log(origin);
        e.preventDefault();
    });


});