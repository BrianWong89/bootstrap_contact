<?php
$data = json_decode(file_get_contents('php://input'), true);
	$members=array();
	/* Declaration of members */
	$member_1=array(
		"name"=>"Brian Wong",
		"age"=>"28",
	);
	$member_2=array(
		"name"=>"Kenneth Lee",
		"age"=>"30",
	);

	$return=array();
	$return["members"]=array();
	array_push($return['members'],$member_1);
	array_push($return['members'],$member_2);
	echo json_encode($return);
