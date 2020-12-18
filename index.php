<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>Our Blogs</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
include_once "database.php";
$db = new \Database\database('myitedu');
$sql =  "SELECT * FROM blogs order by id desc limit 2;";
$blogs = $db->sql($sql);
?>
<div class="container-fluid">
    <h2>Our Blogs</h2>
    <div id="blogs">

        <form action="backend.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <td>Subject:</td>
                    <td><input name="subject" type="text" placeholder="Your new subject"></td>
                </tr>
                <tr>
                    <td>Created By:</td>
                    <td><select name="created_by">
                            <option value="1">1</option>
                            <option selected value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>


        <div class="accordion" id="accordionExample">

            <?php
            foreach ($blogs as $row=>$blog){
            ?>
            <div class="card">
                <div class="card-header" id="heading<?php echo $row;?>">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo $row;?>" aria-expanded="true" aria-controls="collapse<?php echo $row;?>">
                            <?php echo $blog['id']; ?>)    <?php echo $blog['subject']; ?>
                        </button>
                    </h2>
                </div>
                <div id="collapse<?php echo $row;?>" class="collapse show" aria-labelledby="heading<?php echo $row;?>" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>

            <?php
            }
            ?>

        </div>

    </div>
</div>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
=======
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set("America/New_York");
$mydate = $_GET['datetime']??date('Y-m-d');
$oneday = 24 * 3600;
$onemonth = $oneday * 30;
$oneyear = $onemonth * 12;

$total_year =  time() / $oneyear;

echo time()." = ".round($total_year)." years";

?>

<form>
    <p>
        <input type="date" name="datetime" value="<?=$mydate?>" placeholder="Enter Your DOB">
        <button type="submit">GO</button>
    </p>
</form>
</body>
</html>

>>>>>>> dd8690d95a59c87b72c5cca79ed0981633e092af
