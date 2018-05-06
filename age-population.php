<?php

// Store population numbers in each variable corresponding to age group for male.
$maleAgeGroup1 = 96000;
$maleAgeGroup2 = 102000;
$maleAgeGroup3 = 104900;
$maleAgeGroup4 = 119500;
$maleAgeGroup5 = 131800;
$maleAgeGroup6 = 142400;
$maleAgeGroup7 = 13400;
$maleAgeGroup8 = 142800;
$maleAgeGroup9 = 150600;
$maleAgeGroup10 = 148100;
$maleAgeGroup11 = 156400;
$maleAgeGroup12 = 151300;
$maleAgeGroup13 = 130600;
$maleAgeGroup14 = 99400;
$maleAgeGroup15 = 56500;
$maleAgeGroup16 = 40500;
$maleAgeGroup17 = 22400;
$maleAgeGroup18 = 15900;

// Store population numbers in each variable corresponding to age group for female.
$femaleAgeGroup1 = 91600;
$femaleAgeGroup2 = 98600;
$femaleAgeGroup3 = 101400;
$femaleAgeGroup4 = 113500;
$femaleAgeGroup5 = 127200;
$femaleAgeGroup6 = 147800;
$femaleAgeGroup7 = 147000;
$femaleAgeGroup8 = 158200;
$femaleAgeGroup9 = 160800;
$femaleAgeGroup10 = 155400;
$femaleAgeGroup11 = 156400;
$femaleAgeGroup12 = 150400;
$femaleAgeGroup13 = 132100;
$femaleAgeGroup14 = 104600;
$femaleAgeGroup15 = 63000;
$femaleAgeGroup16 = 51400;
$femaleAgeGroup17 = 31900;
$femaleAgeGroup18 = 31000;

function calculateResidents($gender, $dateOfBirth)
{
    if ($gender === "Male") {
        $dateOfBirth = date("d-m-Y", strtotime($dateOfBirth));
        $dobObject = new DateTime($dateOfBirth);
        $nowObject = new DateTime();
        $diff = $dobObject->diff($nowObject);
        return $diff->y;
    } else {
        return false;
    }
}
echo calculateResidents("Male", "10/03/1999") . "<br>";

// Code to calculate age from DOB (for both male & female).
$maleDateOfBirth = "05/05/2005";
$femaleDateOfBirth = "05/05/1995";
$today = date("d-m-Y");
$maleDiff = date_diff(date_create($maleDateOfBirth), date_create($today));
$maleAge = $maleDiff->format('%y');
$femaleDiff = date_diff(date_create($femaleDateOfBirth), date_create($today));
$femaleAge = $femaleDiff->format('%y');

// Code to echo the necessary statement based on age & gender for male.
if ($maleAge >= 0 && $maleAge <= 4) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup1 males in the 0-4 age group.<br>";
} else if ($maleAge >= 5 && $maleAge <= 9) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup2 males in the 5-9 age group.<br>";
} else if ($maleAge >= 10 && $maleAge <= 14) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup3 males in the 10-14 age group.<br>";
} else if ($maleAge >= 15 && $maleAge <= 19) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup4 males in the 15-19 age group.<br>";
} else if ($maleAge >= 20 && $maleAge <= 24) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup5 males in the 20-24 age group.<br>";
} else if ($maleAge >= 25 && $maleAge <= 29) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup6 males in the 25-29 age group.<br>";
} else if ($maleAge >= 30 && $maleAge <= 34) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup7 males in the 30-34 age group.<br>";
} else if ($maleAge >= 35 && $maleAge <= 39) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup8 males in the 35-39 age group.<br>";
} else if ($maleAge >= 40 && $maleAge <= 44) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup9 males in the 40-44 age group.<br>";
} else if ($maleAge >= 45 && $maleAge <= 49) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup10 males in the 45-49 age group.<br>";
} else if ($maleAge >= 50 && $maleAge <= 54) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup11 males in the 50-54 age group.<br>";
} else if ($maleAge >= 55 && $maleAge <= 59) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup12 males in the 55-59 age group.<br>";
} else if ($maleAge >= 60 && $maleAge <= 64) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup13 males in the 60-64 age group.<br>";
} else if ($maleAge >= 65 && $maleAge <= 69) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup14 males in the 65-69 age group.<br>";
} else if ($maleAge >= 70 && $maleAge <= 74) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup15 males in the 70-74 age group.<br>";
} else if ($maleAge >= 75 && $maleAge <= 79) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup16 males in the 75-79 age group.<br>";
} else if ($maleAge >= 80 && $maleAge <= 84) {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup17 males in the 80-84 age group.<br>";
} else {
    echo "Calculated age for male subject is $maleAge. There are $maleAgeGroup18 males in the 85 & Over age group.<br>";
}

// Code to echo the necessary statement based on age & gender for female.
if ($femaleAge >= 0 && $femaleAge <= 4) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup1 females in the 0-4 age group.<br>";
} else if ($femaleAge >= 5 && $femaleAge <= 9) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup2 females in the 5-9 age group.<br>";
} else if ($femaleAge >= 10 && $femaleAge <= 14) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup3 females in the 10-14 age group.<br>";
} else if ($femaleAge >= 15 && $femaleAge <= 19) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup4 females in the 15-19 age group.<br>";
} else if ($femaleAge >= 20 && $femaleAge <= 24) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup5 females in the 20-24 age group.<br>";
} else if ($femaleAge >= 25 && $femaleAge <= 29) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup6 females in the 25-29 age group.<br>";
} else if ($femaleAge >= 30 && $femaleAge <= 34) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup7 females in the 30-34 age group.<br>";
} else if ($femaleAge >= 35 && $femaleAge <= 39) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup8 females in the 35-39 age group.<br>";
} else if ($femaleAge >= 40 && $femaleAge <= 44) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup9 females in the 40-44 age group.<br>";
} else if ($femaleAge >= 45 && $femaleAge <= 49) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup10 females in the 45-49 age group.<br>";
} else if ($femaleAge >= 50 && $femaleAge <= 54) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup11 females in the 50-54 age group.<br>";
} else if ($femaleAge >= 55 && $femaleAge <= 59) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup12 females in the 55-59 age group.<br>";
} else if ($femaleAge >= 60 && $femaleAge <= 64) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup13 females in the 60-64 age group.<br>";
} else if ($femaleAge >= 65 && $femaleAge <= 69) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup14 females in the 65-69 age group.<br>";
} else if ($femaleAge >= 70 && $femaleAge <= 74) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup15 females in the 70-74 age group.<br>";
} else if ($femaleAge >= 75 && $femaleAge <= 79) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup16 females in the 75-79 age group.<br>";
} else if ($femaleAge >= 80 && $femaleAge <= 84) {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup17 females in the 80-84 age group.<br>";
} else {
    echo "Calculated age for female subject is $femaleAge. There are $femaleAgeGroup18 females in the 85 & Over age group.<br>";
}