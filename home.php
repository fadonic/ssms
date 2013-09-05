<?php
//session_start();
//include "dbfunctions.php";
if (($_SESSION['access_level'])==1){
$username = $_SESSION['username'];
$staff_info = get_staff_info($username);
	if($username)
		echo "<p align=\"left\"><strong>Welcome User :</strong> ".$staff_info['surname'].", &nbsp;&nbsp;".$staff_info['middle_Name']."  ".$staff_info['first_Name'].
		        " &nbsp;&nbsp;&nbsp;&nbsp;<a style=\"text-decoration: none; \" href=\"logout.php\"><strong>logout</strong></a></p>";
}elseif (($_SESSION['access_level']) > 1 ){
$username = $_SESSION['username'];
$staff_info = get_staff_info($username);
	if($username)
		echo "<p align=\"left\">Welcome User: ".$staff_info['surname'].", &nbsp;&nbsp;".$staff_info['middle_name']." ".$staff_info['first_name'].
			" &nbsp;&nbsp;&nbsp;&nbsp;<a style=\"text-decoration: none; \" href=\"logout.php\"><strong>logout</strong></a></p>";
}
?>