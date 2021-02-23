$(function () {

    $("#horoscope_names").change(function () {
        var val = $(this).val();

        if (val == 'other'){
            $("#pick_date").fadeIn('slow');
        }else{
            $("#pick_date").fadeOut('fast');
        }
    });


    $(".horoscope").click(function () {
        var dateObj = new Date();
        var month = dateObj.getUTCMonth()+1; //months from 1-12
        var day = dateObj.getUTCDate();
        var year = dateObj.getUTCFullYear();

        if (month<10){
            var new_month = '0'+month;
        }

        var default_date = year + "-" + new_month + "-" + day;

        var name = $(this).data('name');
        var pick_date = $("#pick_date").val() || default_date;

        if (pick_date==''){
            pick_date = default_date;
        }

        var parms = {
            'pick_date' : pick_date,
            'name': name
        };
        $.post('february19b.php', parms, function (response) {
            console.log(response);
        });



    });
});