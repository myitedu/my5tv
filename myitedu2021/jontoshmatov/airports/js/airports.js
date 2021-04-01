$(function () {

    $(".btn_delete").click(function () {
        var id = $(this).data('id');
       var ask = confirm("Are you you want to delete the coutry id #"+id);
       if (!ask){
           return false;
       }
    });


});