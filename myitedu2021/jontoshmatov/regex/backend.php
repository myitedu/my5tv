<?php
$ssn = $_GET['ssn']??null;
$phone = $_GET['phone']??null;
$dob = $_GET['dob']??null;

######### REGEX CODES START HERE #####################
//We are accepting SSN in this format 123-45-6789
$pattern = "#^([0-9]{3})-([0-9]{2})-([0-9]{4})$#";
$error = null;
$is_ssn_valid = preg_match($pattern, $ssn,$matches);

//We are accepting phone numbers in this format +1 (347) 576-4951
$pattern = "#^(\+1) (\([0-9]{3}\)) ([0-9]{3})-([0-9]{4})$#";
$error = null;
$is_phone_valid = preg_match($pattern, $phone,$matches);


//We are accepting dob in this format 01/01/2000
$pattern = "#^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})$#";
$error = null;
$is_dob_valid = preg_match($pattern, $dob,$matches);

echo "<pre>";
$month = $matches[1];
$day = $matches[2];
$year = $matches[3];
if ($month>12 || $month<1){
    $error = "Your DOB: month is out of whack";
}
if ($day>31 || $day<1){
    $error = "Your DOB: day is out of whack";
}
if ($year>date('Y')  || $year < date('Y')-120){
    $error = "Your DOB: YEAR is out of whack";
}
echo "</pre>";

######### REGEX CODES START HERE #####################




if (!$is_ssn_valid){
    $error = "Your SSN is in a wrong format";
}
if (!$is_phone_valid){
    $error = "Your phone number is in a wrong format";
}
if (!$is_dob_valid){
    $error = "Your DOB is in a wrong format";
}

