<?php
$persons = [

    [
        'name' => 'Jon',
        'age' => 21,
        'countries' => ['South Korea','Uzbekistan'=>["Tashkent",'Ferghana',"Namangan","Andijan"],'Russia','USA'],
    ],
    [
        'name' => 'Jessica',
        'age' => 23,
        'countries' => ['South Korea','Uzbekistan'=>["Tashkent",'Ferghana',"Namangan","Andijan"],'Russia','USA',"Japan"],
        'cars' => ["BMW","MERCEDES","AUDI","Nexia","CHEVY TAHOE"]
    ],
    [
        'name' => 'Zarina',
        'age' => 34,
        'countries' => ['South Korea','Uzbekistan'=>["Tashkent",'Ferghana',"Namangan","Andijan"],'Russia','USA'],
    ],
    [
        'name' => 'Temur',
        'age' => 65,
        'countries' => ['South Korea','Uzbekistan'=>["Tashkent",'Ferghana',"Namangan","Andijan"],'Russia','USA'],
    ],

];
foreach($persons as $person){
echo $person['name'].", ";
}
