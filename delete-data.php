<?php

require_once("vendor/autoload.php");

DB::delete('guest', "name=%s", '123');