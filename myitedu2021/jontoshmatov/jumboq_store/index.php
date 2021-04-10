<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Jumboq Store</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/jumboq.js"></script>
    <link rel="stylesheet" href="css/jumboq.css">
</head>
<body>
<?php
$keyword = $_GET['keyword']??null;
require_once "database.php";
$obj = new \Database\database("myitedu");
if ($keyword){
    $products = $obj->sql("SELECT * FROM products WHERE name like '%$keyword%' or description like '%$keyword%' order by id desc;");
}else{
    $products = $obj->sql("SELECT * FROM products order by id desc;");
}

?>
<div class="container-fluid">
    <div id="jumboq">
        <div id="left_window">
            <p>
                <img class="logo" src="https://www.pinclipart.com/picdir/big/7-71478_com-online-shopping-computer-icons-business-online-store.png">
            </p>
            <p>Jumboq Store</p>
            <p>
                <ul class="lsidebar_menu">
                    <li><a title="Click to go Home" href="#">Home</a> <span class="menu_icons"><img src="https://images.vexels.com/media/users/3/157231/isolated/preview/7c9a3c3d7e81dc61dfd56a1be6cabc09-simple-house-icon-by-vexels.png"></span></li>
                    <li><a title="Click to go Home" href="#">About</a> <span class="menu_icons"><img src="https://s18798.pcdn.co/fas-edtech/wp-content/uploads/sites/354/2018/08/creativity.png"></span></li>
                    <li><a title="Click to go Home" href="#">Events</a></li>
                    <li><a title="Click to go Home" href="#">Photos</a></li>
                    <li><a title="Click to go Home" href="#">Locations</a></li>
                    <li><a title="Click to go Home" href="#">Instagram</a></li>
                    <li><a title="Click to go Home" href="#">Videos</a></li>
                    <li><a title="Click to go Home" href="#">Posts</a></li>
                    <li><a title="Click to go Home" href="#">Shop</a></li>
                    <li><a title="Click to go Home" href="#">Reviews</a></li>
                    <li><a title="Click to go Home" href="#">Community</a></li>
                </ul>
            </p>
        </div>
        <div id="right_window">
            <div class="right_top">
                <div class="right_top_left">
                    <button>Like</button>
                    <button>Follow</button>
                    <button>Share</button>
                    <button>...</button>
                </div>
                <div class="right_top_right">
                    <button>Shop Now</button>
                    <button>Send Message</button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="right_bottom">
                <div>10 Items found</div>

                <div class="search_form">
                    <form>
                        <input value="<?php echo $keyword;?>" name="keyword" type="text" placeholder="Your Keyword"><button type="submit">Search</button>
                    </form>
                </div>

                <div class="products">

                    <?php foreach ($products as $product):?>

                    <div class="product">
                        <img alt="<?php echo $product['description'];?>" title="<?php echo $product['description'];?>" src="<?php echo $product['icon'];?>">
                    <div class="product_details">
                        <span><?php echo $product['name'];?></span> <br>
                        <span>$<?php echo $product['price'];?></span>
                        <select name="qty">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button>BUY</button>
                    </div>
                    </div>

                    <?php endforeach;?>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>

</body>
</html>