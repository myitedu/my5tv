$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });



    $("#btn_send").click(function (){
        let message = $("#your_message").val();
        let data = {
            'from_user_id': 1,
            'to_user_id': 2,
            'message': message
        };

        let sent = $.post("create.php", data, function (response){
                document.location = "http://myitedu.uz/projects/chat/index.php";
        });
    });


});