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
    let seconds = 0;
    let minute = 0;
    let hour = 0;
    let time_limit = 0;
    let timer = setInterval(time_lapsed,1000);
    function time_lapsed(){
        //var d = new Date();
        //d.toLocaleTimeString();
        seconds++;
        time_limit++;
        if (seconds%60===0){
            minute++;
            seconds=0;
        }

        if (minute%60===0 && minute>1){
            hour++;
            minute = 0;
        }
        let time_out_class = null;
        if (time_limit>=600){
            time_out_class = "time_out_class";
        }
        console.log(time_limit);
        let hour_glass_image = "<img title='Your session timed out' class='hour_glass_image "+time_out_class+"' src='https://webapp.icbf.com/v2/app/img/hpAlertGlass.gif'>";
        $(".time_lapsed").html(hour + " hour "+minute+" mins and "+seconds+" seconds "+hour_glass_image);

    }
});