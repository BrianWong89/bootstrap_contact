<?php

function isAuthorized ($access_type, $command) {
    $access_type = "";
    $command = "";
    switch ($access_type) {
        case ("Operations"):
            return $command = "view";
            break;
        case ("Manager"):
            return $command = "add";
            break;
        case ("Admin"):
            return $command = "delete";
            break;
        default:
            return "No access type found. Please try again";
            break;
    }
}

$role = isAuthorized("", "");

echo $role;