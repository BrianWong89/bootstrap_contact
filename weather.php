<?php
$return=array();
$return['temperature']=rand(29,44);
$return['typhoonAlert']=(rand(0,1) == 1 ? true : false);
echo json_encode($return);