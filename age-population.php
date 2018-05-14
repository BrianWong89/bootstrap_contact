<?php

function calculateResidents($gender, $dateOfBirth)
{
    // Store population numbers in each variable corresponding to age group for male.
    $maleAgeGroup5 = 99400;
    $maleAgeGroup4 = 56500;
    $maleAgeGroup3 = 40500;
    $maleAgeGroup2 = 22400;
    $maleAgeGroup1 = 15900;

    // Store population numbers in each variable corresponding to age group for female.
    $femaleAgeGroup5 = 104600;
    $femaleAgeGroup4 = 63000;
    $femaleAgeGroup3 = 51400;
    $femaleAgeGroup2 = 31900;
    $femaleAgeGroup1 = 31000;

    // Calculate age based on date of birth.
    $today = date("d-m-Y");
    $diff = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $diff->format('%y');

    $maleAgeText = "Calculated age for male subject is";
    $femaleAgeText = "Calculated age for female subject is";

    if ($gender == "male") {
        if ($age >= 0 && $age <= 4) {
            return "$maleAgeText $age. There are $maleAgeGroup1 males in the 0-4 age group.<br>";
        } else if ($age >= 5 && $age <= 9) {
            return "$maleAgeText $age. There are $maleAgeGroup2 males in the 5-9 age group.<br>";
        } else if ($age >= 10 && $age <= 14) {
            return "$maleAgeText $age. There are $maleAgeGroup3 males in the 10-14 age group.<br>";
        } else if ($age >= 15 && $age <= 19) {
            return "$maleAgeText $age. There are $maleAgeGroup4 males in the 15-19 age group.<br>";
        } else if ($age >= 20 && $age <= 24) {
            return "$maleAgeText $age. There are $maleAgeGroup5 males in the 20-24 age group.<br>";
        }
    } else if ($gender == "female") {
        if ($age >= 0 && $age <= 4) {
            return "$femaleAgeText $age. There are $femaleAgeGroup1 females in the 0-4 age group.<br>";
        } else if ($age >= 5 && $age <= 9) {
            return "$femaleAgeText $age. There are $femaleAgeGroup2 females in the 5-9 age group.<br>";
        } else if ($age >= 10 && $age <= 14) {
            return "$femaleAgeText $age. There are $femaleAgeGroup3 females in the 10-14 age group.<br>";
        } else if ($age >= 15 && $age <= 19) {
            return "$femaleAgeText $age. There are $femaleAgeGroup4 females in the 15-19 age group.<br>";
        } else if ($age >= 20 && $age <= 24) {
            return "$femaleAgeText $age. There are $femaleAgeGroup5 females in the 20-24 age group.<br>";
        }
    }
    return "Data not found. Please try again.";
}

$AgeText = calculateResidents("female", "10/10/1989");

echo $AgeText;
