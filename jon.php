<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$cars = [
    'honda' => ['accord','civic','oddysey'],
    'toyota'=>['corolla','camry'],
    'bmw' => ['M6','750li','325i']
];
?>

<ul>
    <?php foreach ($cars as $make=>$car):?>
        <?php
        if (!$make){
            $make = $car;
        }
        ?>
        <li><?=$make;?>

           <ul>
               <?php
               if (is_array($car)) {
                   foreach ($car as $n => $c) {
                       ?>
                       <li><?php echo $c; ?></li>
                       <?php
                   }
               }
               ?>
           </ul>
        </li>
    <?php endforeach;?>
</ul>

</body>
</html>