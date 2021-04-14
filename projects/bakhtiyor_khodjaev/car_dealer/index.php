<?php
session_start();
$is_user_loggedon = 0;

if ($_SESSION['is_user_loggedon']){
    $is_user_loggedon = 1;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Dealer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body data-userloggedin="<?php echo $is_user_loggedon;?>">

<div class="bahacontainer">
    <div id="bahaheader">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="bahalogo" src="https://pngimage.net/wp-content/uploads/2018/06/used-car-dealers-in-png-2.png">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Cars
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">New cars</a></li>
                                <li><a class="dropdown-item" href="#">Used cars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactus">Contact Us</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sing in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="new_account.php">Sing up</a>
                            </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div id="bahacarousel_home">
        <div class="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" id="home">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://pictures.dealer.com/e/earthmotorcars/0030/73279a6d00cbb37249ac4487f5115cb2x.jpg?impolicy=downsize_bkpt&w=396" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.mktw.net/im-264531/horizontal" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.motor1.com/images/mgl/jQ4vo/s3/handshake-of-car-buyer-and-salesman-who-is-handing-over-the-keys.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <div id="bahajumbotron_aboutus">
        <div class="jumbotron" id="aboutus">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    <div id="bahacards">
        <div class="card mycard" id="service" style="width: 18rem;">
            <img src="https://www.motoringresearch.com/wp-content/uploads/2019/08/Online-reviews-vital-in-choosing-a-car-dealer.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mycard" style="width: 34%;">
            <img src="https://www.nerdwallet.com/assets/blog/wp-content/uploads/2019/08/GettyImages-493028938-1-.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mycard" style="width: 18rem;">
            <img src="https://www.route2autosales.com/wp-content/uploads/2018/10/Car-Dealership-Customer-Smiling-banner.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div id="bahacontactus">
        <div class="bahabox" id="contactus">
            <h3>Contact Us</h3></div>
            <div class="leftbox"></div>
            <div class="righttbox">
        </div>
    </div>
</div>
<?php
include_once "modal.php";
?>
<script>
    $(function () {
       $("body").click(function () {
          var link_name = $(this).text();

          //This is for some links only
         //if (link_name == 'New cars' || link_name == 'Used cars'){
             //$("#exampleModal").modal("show");
             //return false;
         //}

           var userloggedin = $("body").data("userloggedin");
           if (userloggedin==0){
               var ask = confirm("You must login first, do you want to go to login?");
               if (ask) {
                   document.location = "login.php";
               }
               return false;
           }


       });
    });
</script>

<style>
    .modal{
        z-index: 10000;
        top: 100px;
    }
</style>
</body>
</html>