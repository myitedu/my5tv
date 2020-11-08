<?php
$email = "Sun@icloud.com";
//$ssn = "123-45-6789";
$phones = [
    "(347) 576-4951",
    "(712) 266-7952",
    "(564) 636-5953",
    "(408) 626-1954",
    "(202) 866-2955",
];
foreach ($phones as $phone){
    if (!validatePhoneNumber($phone)){
        //echo "<hr>Invalid -> ";
    }
    //echo "$phone<hr>";
}
function validatePhoneNumber($phone){
    //(202) 866-2955
    $pattern = "#\([0-9]{3}\) [0-9]{3}-[0-9]{4}#";
    $found = preg_match($pattern,$phone, $matches);
    return (bool) $found;
}

$is_email_correct = validateEmail($email);
echo "<pre>";
var_dump($is_email_correct);

function validateEmail($email){
    $pattern = "#^[a-zA-Z]{1,10}@[a-zA-Z]{2,8}\.(com|ru)#";
    $found = preg_match($pattern, $email);
    return (bool) $found;
}



