$(function (){
    let qid = $(".question").data("id");
    let total = $(".question").data("total");
    let next_page_number = 1;
    let prev_page_number = 1;
    $("#quiz").load("backend.php");

    $("#left_button").click(function (){
        let qid = $(".question").data("id");
        let total = $(".question").data("total");
        if (qid==1){
            return false;
        }
        qid--;
        $("#quiz").load("backend.php?q="+qid);
       if (qid<=total){
           $("#right_button").show();
       }
       if (qid == 1){
           $(this).hide();
       }
    });
    $("#right_button").click(function (){
        let formdata = $('form').serialize();
        let qid = $(".question").data("id");
        let total = $(".question").data("total");
        if (qid==total){

            let ask = confirm("Are you ready to submit your answers?");
            if (ask){
                let myqid = qid++;
                $("#quiz").load("success.php?q="+myqid+"&total="+total);
                $(this).hide();
                return false;
            }else{
                return false;
            }
        }
        if (qid==total+1){
            return false;
        }
        qid++;
        $("#quiz").load("backend.php?q="+qid, {formdata});
       if (qid>1){
           $("#left_button").show();
       }
    });
});