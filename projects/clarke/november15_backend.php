<?php
$car = $_POST['car']??'audi';
$cars = [
    'audi' => [
        'model'=>'A5',
        'engine' => 'V6',
        'photo' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/2020-audi-a5-coupe-201-1567778049.jpg',
        'price' => '55000'
    ],
    'bmw' => [
        'model'=>'m6',
        'engine' => 'V8',
        'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjwFmaMPHHkVIb5oxue28oHzJxVFbUk8Mhqw&usqp=CAU',
        'price' => '85000'
    ],
    'mercedes' => [
        'model'=>'Maybach',
        'engine' => 'V12',
        'photo' => 'https://i.pinimg.com/564x/b5/3b/e0/b53be03e3a1a71079f29e08565be4eeb.jpg',
        'price' => '135000'
    ],
    'maserati' => [
        'model'=>'MC20',
        'engine' => 'V12',
        'photo' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/maserati-mc20-104-1599596763.jpg?crop=0.891xw:1.00xh;0.0561xw,0&resize=640:*',
        'price' => '110000'
    ],
];
$mycar = $cars[$car];
?>
<table class="table table-bordered car_details">
    <tr><td colspan="2"><img alt="car image" title="Car Image" src="<?php echo $mycar['photo'];?>"></td></tr>
    <tr><td>Make:</td><td><?php echo strtoupper($car);?></td></tr>
    <tr><td>Model:</td><td><?php echo $mycar['model'];?></td></tr>
    <tr><td>Engine:</td><td><?php echo $mycar['engine'];?></td></tr>
    <tr><td>Price:</td><td><?php echo $mycar['price'];?></td></tr>
</table>

