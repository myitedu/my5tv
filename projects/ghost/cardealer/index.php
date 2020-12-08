<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Dealer</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>

<div id="mywrapper">
<div class="topheader">

    COVID-19 information Touchless delivery/pickup is currently underway in your area. Learn More
</div>
<div class="topmenu"></div>
<div class="topmenu2">
    <img class="logo" src="https://photos.prnewswire.com/prn/20130624/CL36441LOGO">
    <div class="menu_list">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</div>
<div class="mycontent"></div>

</div>

<style>
    .menu_list{
        float: left;
        margin: 3px;
    }
    .logo{
        width: 178px;
        float: left;
    }
    .mycontent{
        width: 100%;
        height: 500px;
        background-image: url("https://assets.fastly.carvana.io/home-assets/taxseason/taxseason_hero_071320_lg.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .topmenu2{
        height: 76px;
    }
    .topmenu{
        background-color: #2879bf;
        height: 40px;
    }
    .topheader{
        height: 50px;
        text-align: center;
        padding-top: 10px;
    }
    #mywrapper{
        width: 90%;
        height: 600px;
        margin: auto;
        background-color: white;
    }
    body{
        background-color: #e8ecf1;
    }
</style>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>