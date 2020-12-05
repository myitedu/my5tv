$(function (){
    let total_number_questions = $(".package").length;
    let cid = '';
    $(".btn_next").click(function (){
     let question_id = $(".package").attr("style");
        let current_id = '';
        $(".package").each(function() {
            let style = $(this).css("display");
            if (style == 'block'){
                current_id = $(this).data("question_id");
                return false;
            }
        });
     let next_question_id = current_id;
     next_question_id++;
     cid = next_question_id;
     $("#package_"+current_id).css("display","none");
     $("#package_"+next_question_id).css("display","block");
     $(".current_page_number").html(next_question_id);
     if (current_id==(total_number_questions-1)){
         $(this).hide();
     }
   });

    $(".btn_previous").click(function (){

        $(".package").each(function() {
            let style = $(this).css("display");
            if (style == 'block'){
                current_id = $(this).data("question_id");
                return false;
            }
        });

        let prev_question_id = current_id;
        prev_question_id--;

        $("#package_"+current_id).css("display","none");
        $("#package_"+prev_question_id).css("display","block");
        $(".current_page_number").html(prev_question_id);


        console.log(prev_question_id);


        /*
        let prev_id = cid;
        prev_id--;

        console.log("cid: "+cid+" | prev_id: "+prev_id);


        $(".package").css("display","none");
        $("#package_"+prev_id).css("display","block");

         */
    });
})