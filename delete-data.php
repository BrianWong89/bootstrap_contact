<?php

require_once("vendor/autoload.php");

DB::delete('guest', "id=%i", '1');