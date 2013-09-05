<?php
include "dbfunctions.php";
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']):'';
$middleName = isset($_POST['middleName']) ? trim($_POST['middleName']):'';
$surname = isset($_POST['surname']) ? trim($_POST['surname']):'';
$title = isset($_POST['title']) ? trim($_POST['title']):'';
$sex = isset($_POST['sex']) ? trim($_POST['sex']):'';
$dateOfBirth = isset($_POST['dateOfbirth']) ? trim($_POST['dateOfBirth']):'';
$email = isset($_POST['email']) ? trim($_POST['email']):'';
$mobileNo = isset($_POST['mobileNo']) ? trim($_POST['mobileNo']):'';
$role = isset($_POST['role']) ? trim($_POST['role']):'';

$password = time();
$username = $firstName."@".$surname;
$access_Level=$role;

$staff_registration_query = "insert into registered_staff(role,first_Name,middle_Name,surname,title,sex,date_Of_Birth,mobile_No,email,username)
values('$role','$firstName','$middleName','$surname','$title','$sex','$dateOfBirth','$mobileNo','$email','$username')";
$staff_registration_result = mysql_query($staff_registration_query);
$InsertUsers_query = "insert into users(username,password,access_Level)
                      values('$username','$password','$access_Level')";
$InsertUsers_result= mysql_query($InsertUsers_query);
if(isset($staff_registration_result)){
  $msg = "Staff Registration is Successful";
header('Location:staff_registration.php?error='.$msg);
}

?>
