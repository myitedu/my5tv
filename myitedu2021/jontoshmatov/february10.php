<?php
$arrays =
[
    'USA',
    'Russia',
    'Uzbekistan'=>[
        'Tashkent' => ['Mirzo Ulugbek','Olmazor','Yunusobod','Chilonzor'],
        'Ferghana'=> ['Margilan','Kokand','Navbahor'],
        'Samarkand'
    ],
    'Brazil'
];
echo "Before the code dies <hr>";
exit('I have a mesage.. our enemies have 4 batalion and 3 tanks');
echo "After the code died";



echo "<pre>";
print_r(sizeof($arrays['Uzbekistan']['Tashkent']));
echo "</pre>";




