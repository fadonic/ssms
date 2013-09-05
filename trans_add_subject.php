<?php
include('dbfunctions.php');
$school = isset($_POST['sch']) ? trim($_POST['sch']) : '';
$subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';


$query = "INSERT INTO subject(school_Id,subject_Name)
		  VALUES('$school','$subject')";
$result = mysql_query($query);
if(isset($result)){
$msg = "Subject Successfully Added";
header('Location:add_subject.php?error='.$msg);
}
?>