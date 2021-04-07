$(function () {
    $(".btn_airport_update").hide();
    $(".btn_delete").click(function () {
        var id = $(this).data('id');
       var ask = confirm("Are you you want to delete the coutry id #"+id);
       if (!ask){
           return false;
       }
    });



    $(".airport_city, .airport_country, .airport_name").keyup(function () {
        var id = $(this).data("id");
        $(".airport_"+id).show();
    });

    $(".btn_airport_update").click(function () {
        var id = $(this).data("id");
        var city_name = $("#city_"+id).text();
        var country_name = $("#country_"+id).text();
        var name = $("#name_"+id).text();
        var parms = {id:id, city_name: city_name, country_name: country_name, name:name};
        $.post("update.php", parms, function (response) {
          if (response==200){
              $("#modal_body_content").html("Your city is changed to "+ city_name);
              $(".btn_airport_update").hide();
              $('#exampleModal').modal('show');
          }
          return false;
        })
    });

    $("#btn_create_new").click(function () {
        var text = $(this).text();
        if (text == 'Create Form'){
            $(this).text('Close Form');
            $(this).removeClass("btn-info").addClass("btn-success");
        }else{
            $(this).text('Create Form');
            $(this).removeClass("btn-success").addClass("btn-info");
        }
       $("#form_create_new_airport").toggle();
    });

    $("#btn_insert").click(function () {
       var city_name = $("#city_name").val();
       var country_name = $("#country_name").val();
       var airport_name = $("#airport_name").val();

    var parms = {city_name: city_name, country_name: country_name, airport_name:airport_name};
    $.post("create.php", parms, function (response) {
        if (response==200){
            $("#modal_body_content").html("Your new airport has been added");
            $(".btn_airport_update").hide();
            $('#exampleModal').modal('show');
            $("#form_create_new_airport").fadeOut("slow");
            $("#city_name").val('');
            $("#country_name").val('');
            $("#airport_name").val('');
            $("#btn_create_new").text('Create Form');
            $("#btn_create_new").removeClass("btn-success").addClass("btn-info");
        }
        return false;
    });

    });
});