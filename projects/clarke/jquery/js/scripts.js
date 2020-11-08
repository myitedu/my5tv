$(function (){
   $(".icon_menu_cover").click(function (){
     let title = $(this).data("icon");
     execute_menu_requests(title);
   });


    function execute_menu_requests(title){
        if (title == 'close'){
            let ask = confirm("Are you sure you want to close?");
            if (ask) {
                open(location, '_self').close();
            }
            return false;
        }
        if (title == 'print'){
            window.print();
            return false;
        }

        $(".content_window").html("You clicked on: " + title);
    }























});