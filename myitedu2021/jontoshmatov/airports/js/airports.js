$(function () {
    $(".btn_airport_update").hide();
    $(".btn_delete").click(function () {
        var id = $(this).data('id');
       var ask = confirm("Are you you want to delete the coutry id #"+id);
       if (!ask){
           return false;
       }
    });



    $(".airport_city").keyup(function () {
        var id = $(this).data("id");
        $(".airport_"+id).show();
    });

    $(".btn_airport_update").click(function () {
        var id = $(this).data("id");
        var city_name = $("#city_"+id).text();
        var parms = {id:id, city_name: city_name};
        $.post("update.php", parms, function (response) {
          if (response==200){
              $("#modal_body_content").html("Your city is changed to "+ city_name);
              $(".btn_airport_update").hide();
              $('#exampleModal').modal('show');
          }
          return false;
        })
    });



});