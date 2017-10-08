<?php
$members=array();
/* Declaration of members */
$member_1=array(
	"name"=>"Brian Wong",
	"enrolmentDate"=>"25-12-2017",
);
$member_2=array(
	"name"=>"Kenneth Lee",
	"enrolmentDate"=>"25-12-2017",
);

/* End of declaration of members */
//Let's push all the member into $members array
if ($_REQUEST['startDate'] == "25-12-2017" && $_REQUEST['endDate'] == "25-12-2017") {
	array_push($members,$member_1);
	array_push($members,$member_2);
}
$return=array();
$return["members"]=array();
$return["members"]=$members;
$return["startDate"]=$_REQUEST["startDate"];
$return["endDate"]=$_REQUEST["endDate"];

//Json encode
//Try this 1, then comment it and try the next line. View the difference in "View Source"
//if ($_REQUEST['action'] == "listSavings") {
	echo json_encode($return, JSON_PRETTY_PRINT);
//}