<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>November 15, 2020</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
$cars = [
    'audi' => [
        'model'=>'A5',
        'engine' => 'V6',
        'photo' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2020-audi-a5-coupe-201-1567778049.jpg'
    ],
    'bmw' => [
        'model'=>'m6',
        'engine' => 'V8',
        'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjwFmaMPHHkVIb5oxue28oHzJxVFbUk8Mhqw&usqp=CAU'
    ],
    'mercedes' => [
        'model'=>'Maybach',
        'engine' => 'V12',
        'photo' => 'https://i.pinimg.com/564x/b5/3b/e0/b53be03e3a1a71079f29e08565be4eeb.jpg'
    ],
    'maserati' => [
        'model'=>'MC20',
        'engine' => 'V12',
        'photo' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/maserati-mc20-104-1599596763.jpg?crop=0.891xw:1.00xh;0.0561xw,0&resize=640:*'
    ],
];
?>
<div class="container-fluid">
   <div id="mybox">
       <div class="left_col">
           <?php
           foreach ($cars as $name=>$car){
           ?>
           <div data-car="<?php echo $name;?>" class="left_col_items"><img title="Mercedes-Benz" alt="Car image" src="<?php echo $car['photo'];?>"></div>
           <?php
           }
           ?>
       </div>
       <div class="right_col"></div>
   </div>
</div>

<style>
    .car_details th, td{
        border: 1px solid #03180a !important;
    }
    .car_details td:last-child{
        width: 70%;
        background-color: lightgrey;
    }
    .car_details td:first-child{
        width: 30%;
        background-color: #1d3351;
        color: #d0d029;
    }
    .car_details tr:first-child td{
        text-align: center;
    }
    .car_details{
        width: 98%;
        margin: auto;
        background-color: white;
    }
.car_details img{
    width: 250px;
    height: 150px;
    border: 3px solid #1b1b24;
    border-radius: 15px;
    box-shadow: 5px 5px 5px 5px #090707;
    margin-bottom: 10px;

}
    .left_col_items img{
        width: 100%;
    }
    .left_col_items{
        margin-bottom: 3px;
        border-top: 2px solid lightblue;
        border-bottom: 2px solid lightblue;
        cursor: pointer;
    }

    .right_col{
        width: 70%;
        height: 100%;
        background-color: #bbecab;
        display: inline-block;
        float: right;
        overflow: auto;
    }
    .left_col{
        width: 30%;
        height: 100%;
        background-color: #2e6da4;
        display: inline-block;
        float: left;
        overflow: auto;
    }
    #mybox{
        width: 700px;
        height: 400px;
        margin: 100px auto;
        border: 5px solid #093c09;
        border-radius: 15px;
        background-color: #f6c7c7;
    }
</style>
<script>
    $(function (){
       $(".left_col_items").click(function (){
         let car = $(this).data('car');
         let data = {'car':car};
         $.post('november15_backend.php', data, function (response){
            $(".right_col").html(response);
         });
       });
    });
</script>
</body>
</html>