$(function () {
    $(".large_image_window").empty().hide();
    $(".product_icon").mouseenter(function () {
        let img_url = $(this).data("img_url");
        let img = "<img class='displayed_img' src='" + img_url + "'>";
        $(".large_image_window").show().html(img);
    });
    $(".product_icon").mouseout(function () {
        $(".large_image_window").empty().hide();
    });
    $(".shopping_cart").click(function () {
        let data = {};
        $.post("http://myitedu.uz/projects/shoppingcart/shopping_cart.php", data, function (response) {
            $("#modal_body").html(response);
        });
    });
    $(document).on('click', '.remove_item_icon', function () {
        let product_id = $(this).data("product_id");
        let data = {'product_id': product_id};
        let result = null;
        $.post("http://myitedu.uz/projects/shoppingcart/delete_items.php", data, function (qty) {
                $.post("http://myitedu.uz/projects/shoppingcart/shopping_cart.php", data, function (response) {
                    $("#modal_body").html(response);
                    $(".shopping_cart").text(qty);
                });

        });
    });
    $(".product").click(function () {
        let product_id = $(this).data('product_id');
        let qty = $("#qty_" + product_id).val();
        let data = {
            'product_id': product_id,
            'qty': qty,
            'user_id': 99
        };
        $.post("http://myitedu.uz/projects/shoppingcart/add_shopping_cart.php", data, function (qty) {
            $(".shopping_cart").text(qty);
        });
    })


    $("#checkout_button").click(function (){
       $("#checkout").fadeIn("slow");
    });

});
