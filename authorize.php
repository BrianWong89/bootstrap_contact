<?php

function isAuthorized($access_type, $command)
{
    switch ($access_type) {
        case "Operations":
            switch ($command) {
                case "view":
                case "modify":
                    return true;
                    break;
            }
            break;
        case "Manager":
            switch ($command) {
                case "add":
                case "view":
                case "modify":
                    return true;
                    break;
            }
            break;
        case "Admin":
            switch ($command) {
                case "add":
                case "view":
                case "modify":
                case "delete":
                    return true;
                    break;
            }
            break;
    }
    return false;
}

$true = isAuthorized("Admin", "delete");
echo $true;