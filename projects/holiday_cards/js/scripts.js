$(function (){
    let send_now = false;
   $(".img_envelope").click(function (){
       $('#mymodal').toggle("slow");
   });

   $("#when_send_card").change(function (){
      let answer = $(this).val();
      if (answer==1){
          $(".pick_date").fadeOut("fast");
          $(".send_button").fadeIn("slow");
          $(".send_button button").text("SEND NOW");
          send_now = true;
      }
       if (answer==0){
           $(".send_button").fadeIn("slow");
           $(".send_button button").text("SCHEDULE");
           $(".pick_date").fadeIn("slow");
           send_now = false;
       }
       if (answer==-1){
           send_now = false;
           return false;
       }
   });

   $("#btn_send").click(function (){
       let data = {
           'td_title': $(".td_title").html(),
           'td_person_name': $(".td_person_name").html(),
           'td_wish': $(".td_wish").html(),
           'td_signature': $(".td_signature").html(),
           'inp_year': $("#inp_year").val(),
           'inp_month': $("#inp_month").val(),
           'inp_date': $("#inp_date").val(),
       };
        $.post("backend.php", data, function (response){
            if (send_now){
                alert("Your card has been sent");
            }else{
                let text = "to send on "+data.inp_year+"/"+data.inp_month+"/"+data.inp_date;
                alert("Your card has been scheduled \n "+text);
            }
            $('#mymodal').fadeOut("slow");
        });
   });

});
