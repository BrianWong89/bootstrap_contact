<?php

require_once("vendor/autoload.php");
for ($i=0;$i<50000;$i++) {
    DB::insert("enrolment",
        array(
            "name"=>rand(0,10000000),
            "enrolmentDate"=>"2017-12-25",
        )
    );

}
