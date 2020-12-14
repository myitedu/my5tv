$(function (){
    let total_number_questions = $(".package").length;
    let cid = '';
    let current_id = '';
    get_current_page();
    $(".btn_next").click(function (){
     let question_id = $(".package").attr("style");
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
     if (next_question_id>1){
         $(".btn_previous").show();
     }
     console.log(next_question_id);
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

        if (prev_question_id<=1){
            $(".btn_previous").hide();
            $(".btn_next").show();
        }

        if (prev_question_id==0){
            return false;
        }
        $("#package_"+current_id).css("display","none");
        $("#package_"+prev_question_id).css("display","block");
        $(".current_page_number").html(prev_question_id);
    });

    function get_current_page(){
        $(".package").each(function() {
            let style = $(this).css("display");
            if (style == 'block'){
                current_id = $(this).data("question_id");
                return false;
            }else{
                current_id = 1;
            }
        });
    }
})