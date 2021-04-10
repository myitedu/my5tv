<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resourses/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="resourses/css/queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
          rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnifood</title>
</head>

<body>
<header>
    <nav>
        <div class="row">
            <img src="resourses/images/logo-white.png" alt="Omnifood logo" class="logo">
            <img src="resourses/images/logo.png" alt="Omnifood logo" class="logo-black">
            <ul class="main-nav js--main-nav">
                <li><a href="#js--section-features">Food delivery</a></li>
                <li><a href="#section-meals">How it works</a></li>
                <li><a href="#section-cities">Our cities</a></li>
                <li><a href="#js--section-plans">Sign up</a></li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon">
                <ion-icon name="reorder-three-outline" id="reorder-three-outline"></ion-icon>
            </a>
        </div>
    </nav>
    <div class="hero-text-box">
        <h1>Goodbye junk food. <br>Hello super healthy meals.</h1>
        <a class="btn btn-full js--scroll-to-plans" href="#js--section-plans">I’m hungry</a>
        <a class="btn btn-ghost js--scroll-to-start" href="#js--section-features">Show me more</a>
    </div>
</header>
<section class="section-features js--section-features" id="js--section-features">
    <div class="row">
        <h2>Get food fast &mdash; not fast food</h2>
        <p class="long-copy">Hello, we’re Omnifood, your new premium food delivery service. We know you’re always
            busy. No time for cooking. So let us take care of that, we’re really good at it, we promise! </p>
    </div>

    <div class="row js--wp-1">
        <div class="col span-1-of-4 box">
            <ion-icon name="infinite-outline" class="icon-big"></ion-icon>
            <h3>Up to 365 days/year</h3>
            <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage.
                You can also choose to order more flexibly if that's your style.
            </p>
        </div>
        <div class="col span-1-of-4 box">
            <ion-icon name="time-outline" class="icon-big"></ion-icon>
            <h3>Ready in 20 minutes</h3>
            <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your
                home. We work with the best chefs in each town to ensure that you're 100% happy.
            </p>
        </div>
        <div class="col span-1-of-4 box">
            <ion-icon name="leaf-outline" class="icon-big"></ion-icon>
            <h3>100% organic</h3>
            <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or
                antibiotics. Good for your health, the environment, and it also tastes better!
            </p>
        </div>
        <div class="col span-1-of-4 box">
            <ion-icon name="cart-outline" class="icon-big"></ion-icon>
            <h3>Order anything</h3>
            <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose
                from our menu containing over 100 delicious meals. It's up to you!
            </p>
        </div>
    </div>
</section>
<section class="section-meals" id="section-meals">
    <ul class="
meals-showcase clearfix">
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/1.jpg" alt=Korean bibimbap with egg and vegetables">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/2.jpg" alt=Simple italian pizza with cherry tomatoes">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/3.jpg" alt=Chicken breast steak with vegetables">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/4.jpg" alt= "Autumn pumpkin soup">
            </figure>
        </li>
    </ul>
    <ul class="meals-showcase clearfix">
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/5.jpg" alt=Paleo beef steak with vegetables">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/6.jpg" alt=Healthy baguette with egg and vegetables">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/7.jpg" alt=Burger with cheddar and bacon">
            </figure>
        </li>
        <li>
            <figure class="meal-photo">
                <img src="resourses/images/8.jpg" alt= "Granola with cherries and strawberries">
            </figure>
        </li>
    </ul>
</section>
<section class="section-steps">
    <div class="row">
        <h2>How it works &mdash; How it works - Simple as 1, 2, 3</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-2 steps-box">
            <img src="resourses/images/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen">
        </div>
        <div class="col span-1-of-2 steps-box">
            <div class="works-step">
                <div>1</div>
                <p>Choose the subscription plan that best fits your needs and sign up today.</p>
            </div>
            <div class="works-step">
                <div>2</div>
                <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
            </div>
            <div class="works-step">
                <div>3</div>
                <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
            </div>
            <a href="#" class="btn-app"><img src="resourses/images/download-app.svg" alt="App Store Button"></a>
            <a href="#" class="btn-app"><img src="resourses/images/download-app-android.png"
                                             alt="Play Store Button"></a>
        </div>
    </div>
</section>
<section class="section-cities" id="section-cities">
    <div class="row">
        <h2>We're currently in these cities</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-4 box">
            <img src="resourses/images/lisbon-3.jpg" alt="lisbon">
            <h3>Lisbon</h3>
            <div class="city-future">
                <ion-icon name="person-circle-outline" class="icon-small"></ion-icon>
                1600+ happy eaters
            </div>
            <div class="city-future">
                <ion-icon name="star-outline" class="icon-small"></ion-icon>
                60+ top chefs
            </div>
            <div class="city-future">
                <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                <a href="#">@omnifood_lx</a>
            </div>
        </div>
        <div class="col span-1-of-4 box">
            <img src="resourses/images/san-francisco.jpg" alt="San Francisco">
            <h3>San Francisco</h3>
            <div class="city-future">
                <ion-icon name="person-circle-outline" class="icon-small"></ion-icon>
                3700+ happy eaters
            </div>
            <div class="city-future">
                <ion-icon name="star-outline" class="icon-small"></ion-icon>
                160+ top chefs
            </div>
            <div class="city-future">
                <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                <a href="#">@omnifood_sf</a>
            </div>
        </div>
        <div class="col span-1-of-4 box">
            <img src="resourses/images/berlin.jpg" alt="Berlin">
            <h3>Berlin</h3>
            <div class="city-future">
                <ion-icon name="person-circle-outline" class="icon-small"></ion-icon>
                2300+ happy eaters
            </div>
            <div class="city-future">
                <ion-icon name="star-outline" class="icon-small"></ion-icon>
                1110+ top chefs
            </div>
            <div class="city-future">
                <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                <a href="#">@omnifood_berlin</a>
            </div>
        </div>
        <div class="col span-1-of-4 box">
            <img src="resourses/images/london.jpg" alt="London">
            <h3>London</h3>
            <div class="city-future">
                <ion-icon name="person-circle-outline" class="icon-small"></ion-icon>
                1110+ top chefs
            </div>
            <div class="city-future">
                <ion-icon name="star-outline" class="icon-small"></ion-icon>
                50+ top chefs
            </div>
            <div class="city-future">
                <ion-icon name="logo-twitter" class="icon-small"></ion-icon>
                <a href="#">@omnifood_london</a>
            </div>
        </div>
    </div>
</section>
<section class="section-testimonials">
    <div class="row">
        <h2>Our customers can't live without us</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <blockquote>
                Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so
                Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                <cite><img src="resourses/images/customer-1.jpg">Alberto Duncan</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food
                delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                <cite><img src="resourses/images/customer-2.jpg">Joana Silva</cite>
            </blockquote>
        </div>
        <div class="col span-1-of-3">
            <blockquote>
                I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and
                ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                <cite><img src="resourses/images/customer-3.jpg">Milton Chapman</cite>
            </blockquote>
        </div>
    </div>
</section>
<section class="section-plans" id="js--section-plans">
    <div class="row">
        <h2>Start eating healthy today</h2>
    </div>
    <div class="row">
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Premium</h3>
                    <p class="plan-price">399$ <span>/ month<span></p>
                    <p class="plan-price-meal">Th
                        at’s only 13.30$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>1 meal every day
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Order 24/7
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Access to newest creations
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Free delivery
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-full">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Pro</h3>
                    <p class="plan-price">149$ <span>/ month<span></p>
                    <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                </div>
                <div>
                    <ul>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>1 meal every day
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Order 24/7
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Access to newest creations
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Free delivery
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
        <div class="col span-1-of-3">
            <div class="plan-box">
                <div>
                    <h3>Starter</h3>
                    <p class="plan-price">19$ <span>/ meal<span></p>
                    <p class="plan-price-meal">&nbsp;</p>
                </div>
                <div>
                    <ul>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>1 meal
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Order from 8 am to 12 pm
                        </li>
                        <li>
                            <ion-icon name="close-outline"></ion-icon>
                        </li>
                        <li>
                            <ion-icon name="checkmark-outline"></ion-icon>Free delivery
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-ghost">Sign up now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-form">
    <div class="row">
        <h2>We're happy to hear from you</h2>
    </div>
    <div class="row">
        <form method="post" action="#" class="contact-form">
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="name">Name</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="text" name="name" id="name" placeholder="Your name" required>
                </div>
            </div>
            <div clas
                 s="row">
                <div class="col span-1-of-3">
                    <label for="email">Email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="Find-us">How did you find us?</label>
                </div>
                <div class="col span-2-of-3">
                    <select name="find-us" id="find-us">
                        <option value="friends" selected>Friends</option>
                        <option value="search">Search engine</option>
                        <option value="ad">Advartisement</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>Newsletter</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="checkbox" name="news" id="news" checked> Yes, please
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>Drop us a line</label>
                </div>
                <div class="col span-2-of-3">
                    <textarea name="massage" placeholder="Your massage"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="submit" value="Send it!">
                </div>
            </div>
        </form>
    </div>
</section>
<footer>
    <div class="row">
        <div class="col span-1of-2">
            <ul class="footer-nav">
                <li><a href="#">About us</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">IOS App</a></li>
                <li><a href="#">Android App</a></li>
            </ul>
        </div>
        <div class="col span-1-of-2">
            <ul class="social-links">
                <li><a href="#">
                        <ion-icon name="logo-facebook" id="logo-facebook"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-twitter" id="logo-twitter"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-google" id="logo-google"></ion-icon>
                    </a></li>
                <li><a href="#">
                        <ion-icon name="logo-instagram" id="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
        </div>
    </div>

    <div class="row">
        <p>
            Copyrigt &copy;2021 by Omnifood. All rights reserved.
        </p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resourses/js/script.js"></script>
</body>

</html>
