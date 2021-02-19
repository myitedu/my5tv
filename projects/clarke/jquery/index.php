<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<div class="container-fluid">
    <div id="mywindow">
        <div class="menu_window">
            <div class="menu_window_top">
                <div class="mwt_left">Untitle 1 - getedit</div>
                <div class="mwt_right">
                    <i class="fa fa-window-minimize"></i>
                    <i class="fa fa-window-maximize"></i>
                    <i class="fa fa-window-close"></i>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="menu_window_bottom">
                <div class="text_menu">File</div>
                <div class="text_menu">Edit</div>
                <div class="text_menu">View</div>
                <div class="text_menu">Seach</div>
                <div class="text_menu">Documents</div>
                <div class="text_menu">Help</div>
            </div>
        </div>
        <div class="icons_window">
            <div class="icons_window_bg"></div>
            <div data-icon='new' class="icon_menu_cover"></div>
            <div data-icon='open' class="icon_menu_cover"></div>
            <div data-icon='save' class="icon_menu_cover"></div>
            <div data-icon='close' class="icon_menu_cover"></div>
            <div data-icon='print' class="icon_menu_cover"></div>
            <div data-icon='undo' class="icon_menu_cover"></div>
            <div data-icon='redo' class="icon_menu_cover"></div>
            <div data-icon='cut' class="icon_menu_cover"></div>
            <div data-icon='copy' class="icon_menu_cover"></div>
            <div data-icon='paste' class="icon_menu_cover"></div>
            <div data-icon='find' class="icon_menu_cover"></div>
            <div data-icon='replace' class="icon_menu_cover"></div>
        </div>
        <div class="title_window"></div>
        <div class="content_window" contenteditable="true"></div>
        <div class="bottom_window"></div>
    </div>
</div>
</body>
</html>