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
    });

    //The next button
    $("#right_button").click(function (){
        let formdata = $('form').serialize();
        let qid = $(".question").data("id");
        let total = $(".question").data("total");
        if (qid==total+1){
            return false;
        }
        qid++;

        $("#quiz").load("backend.php?q="+qid, {formdata});
    });

});