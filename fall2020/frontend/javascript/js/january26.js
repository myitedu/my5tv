$(function () {
    var msg = '';
    var first_name_max = 3;
    var is_form_valid = false;
    $("#myform").submit(function () {
        //check_first_name
       let first_name = $("input[name='first_name']").val();
       let last_name = $("input[name='last_name']").val();
       let email = $("input[name='email']").val();
       let phone = $("input[name='phone']").val();
       let message = $("textarea[name='message']").val();

       if (first_name.length < first_name_max){
           $("#check_first_name").removeClass("mycheck_mark").addClass("mycheck_mark_failed").show();
           let flength = first_name.length;
           msg = "Your first name must be "+first_name_max+" characters long. Your is "+flength+" chars long";
           $("#myalert").html(msg)
               .fadeIn('slow')
               .removeClass("alert-success")
               .addClass("alert-danger");
           return false;
       }else{
           $("#check_first_name").removeClass("mycheck_mark_failed").addClass("mycheck_mark").show();
           $("#myalert").html(msg)
               .removeClass("alert-danger")
               .addClass("alert-success");
           is_form_valid = true;
           $("#btn_submit").show();
       }
        if (last_name.length < 2){
            alert("Your last name must be 5 characters long");
            $("#btn_submit").hide();
            return false;
        }else{
            $("#btn_submit").show();
        }

       return false;
    });
    $("input[name='email']").keyup(function () {
       let email = $(this).val();
        if (email.length>4){
            let validate = $.post("checkuser.php", {"email":email}, function(response){
               if (response!=1){
                   //check_email
                   $("#check_email").removeClass("mycheck_mark").addClass("mycheck_mark_failed").show();
                   $("#btn_submit").hide();
               }else{
                   $("#check_email").removeClass("mycheck_mark_failed").addClass("mycheck_mark").show();
                   is_form_valid = true;
                   $("#btn_submit").show();
               }
                });
        }
    });
    $("#show_password").click(function () {
        let password = $("input[name='password']");
        let img = $(this).attr('src');
        if (img == 'https://static.thenounproject.com/png/3258936-200.png'){
            $(this).attr('src', 'https://cdn3.iconfinder.com/data/icons/eyes-6/32/Eye_Close_Hide_Invisible__Password_eye-512.png');
            password.attr('type','password');
        }else{
            $(this).attr('src', 'https://static.thenounproject.com/png/3258936-200.png');
            password.attr('type','text');
        }

    });
});