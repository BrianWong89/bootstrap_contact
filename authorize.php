<?php

function isAuthorized ($access_type, $command) {
    $access_type = "";
    $command = "";
    switch ($access_type) {
        case ("Operations"):
            switch ($command) {
                case "":
                    break;
            }
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

$true = isAuthorized("Admin", "delete");

echo $role;