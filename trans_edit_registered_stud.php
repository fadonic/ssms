<?php
include "dbfunctions.php";
$surname = isset($_POST['surname']) ? trim($_POST['surname']):'';
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']):'';
$middleName = isset($_POST['middleName']) ? trim($_POST['middleName']):'';
$sex = isset($_POST['sex']) ? trim($_POST['sex']):'';
$class = isset($_POST['class']) ? trim($_POST['class']):'';
$dateOfBirth = isset($_POST['dateOfBirth']) ? trim($_POST['dateOfBirth']):'';
$yearOfEntry = isset($_POST['yearOfEntry']) ? trim($_POST['yearOfEntry']):'';
$nationality = isset($_POST['nationality']) ? trim($_POST['nationality']):'';
$state = isset($_POST['state']) ? trim($_POST['state']):'';
$lga = isset($_POST['lga']) ? trim($_POST['lga']):'';
$address = isset($_POST['address']) ? trim($_POST['address']):'';
$mobileNo = isset($_POST['mobileNo']) ? trim($_POST['mobileNo']):'';
$email = isset($_POST['email']) ? trim($_POST['email']):'';
$religion = isset($_POST['religion']) ? trim($_POST['religion']):'';
$motherTongue = isset($_POST['motherTongue']) ? trim($_POST['motherTongue']):'';
$ssurname = isset($_POST['ssurname']) ? trim($_POST['ssurname']):'';
$sfirstName = isset($_POST['sfirstName']) ? trim($_POST['sfirstName']):'';
$sotherName = isset($_POST['sotherName']) ? trim($_POST['sotherName']):'';
$saddress = isset($_POST['saddress']) ? trim($_POST['saddress']):'';
$soccupation = isset($_POST['soccupation']) ? trim($_POST['soccupation']):'';
$srelationship = isset($_POST['srelationpship']) ? trim($_POST['srelationship']):'';
$ksurname = isset($_POST['ksurname']) ? trim($_POST['ksurname']):'';
$kfirstName = isset($_POST['kfirstName']) ? trim($_POST['kfirstName']):'';
$kotherName = isset($_POST['kotherName']) ? trim($_POST['kotherName']):'';
$kaddress = isset($_POST['kaddress']) ? trim($_POST['kaddress']):'';
$koccupation = isset($_POST['koccupation']) ? trim($_POST['koccupation']):'';
$krelationship = isset($_POST['krelationpship']) ? trim($_POST['krelationship']):'';


$student_edit_registration_query = "update registered_stud set surname='$_POST[surname]', first_Name='$_POST[firstName]',
middle_Name='$_POST[middleName]', sex='$_POST[sex]',
class_Id='$_POST[class_Id]', date_Of_Birth='$_POST[dateOfBirth]',
year_Of_Entry='$_POST[yearOfEntry]', nationality='$_POST[nationality]',
state='$_POST[state]', lga='$_POST[lga]', address='$_POST[address]',
mobile_No='$_POST[mobileNo]', email='$_POST[email]',
religion='$_POST[religion]', mother_Tongue='$_POST[motherTongue]',
ssurname='$_POST[ssurname]', sfirst_Name='$_POST[sfirstName]',
sother_Name='$_POST[sotherName]', saddress='$_POST[saddress]',
soccupation='$_POST[soccupation]', srelationship='$_POST[srelationship]',
ksurname='$_POST[ksurname]', kfirst_Name='$_POST[kfirstName]',
kother_Name='$_POST[kotherName]', kaddress='$_POST[kaddress]',
koccupation='$_POST[koccupation]', krelationship='$_POST[krelationship]' where student_Id='$_POST[id]'";
$student_edit_registration_result = mysql_query($student_edit_registration_query);
if(isset($student_edit_registration_result)){
  $msg = "Student Record Successfully Updated";
header('Location:studdata_edit.php?error='.$msg);
}
?>
