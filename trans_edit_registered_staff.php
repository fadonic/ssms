<?php
include "dbfunctions.php";
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']):'';
$middleName = isset($_POST['middleName']) ? trim($_POST['middleName']):'';
$surname = isset($_POST['surname']) ? trim($_POST['surname']):'';
$title = isset($_POST['title']) ? trim($_POST['title']):'';
$sex = isset($_POST['sex']) ? trim($_POST['sex']):'';
$dateOfBirth = isset($_POST['dateOfBirth']) ? trim($_POST['dateOfBirth']):'';
$email = isset($_POST['email']) ? trim($_POST['email']):'';
$mobileNo = isset($_POST['mobileNo']) ? trim($_POST['mobileNo']):'';
$role = isset($_POST['role']) ? trim($_POST['role']):'';

$staff_edit_registration_query = "update registered_staff set first_Name='$_POST[firstName]', middle_Name='$_POST[middleName]', surname='$_POST[surname]', title='$_POST[title]', 
        sex='$_POST[sex]', date_Of_Birth='$_POST[dateOfBirth]', mobile_No='$_POST[mobileNo]', email='$_POST[email]' where username='$_POST[id]'";
$staff_edit_registration_result = mysql_query($staff_edit_registration_query);
if(isset($staff_edit_registration_result)){
 $msg = "Staff successfully updated";
header('Location:staffdata_edit.php?action=regStudent'.' & error='.$msg);
  //echo "staff successfully updated";
}
?>
