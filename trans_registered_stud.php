<?php
include "dbfunctions.php";
$surname = isset($_POST['surname']) ? trim($_POST['surname']):'';
$firstName = isset($_POST['firstName']) ? trim($_POST['firstName']):'';
$middleName = isset($_POST['middleName']) ? trim($_POST['middleName']):'';
$sex = isset($_POST['sex']) ? trim($_POST['sex']):'';
$passport = isset($_POST['uploadFile']) ? trim($_POST['uploadFile']):'';
$class_Id = isset($_POST['class_Id']) ? trim($_POST['class_Id']):'';
$dateOfBirth = isset($_POST['dateOfBirth']) ? trim($_POST['dateOfEntry']):'';
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
$srelationship = isset($_POST['srelationship']) ? trim($_POST['srelationship']):'';
$ksurname = isset($_POST['ksurname']) ? trim($_POST['ksurname']):'';
$kfirstName = isset($_POST['kfirstName']) ? trim($_POST['kfirstName']):'';
$kotherName = isset($_POST['kotherName']) ? trim($_POST['kotherName']):'';
$kaddress = isset($_POST['kaddress']) ? trim($_POST['kaddress']):'';
$koccupation = isset($_POST['koccupation']) ? trim($_POST['koccupation']):'';
$krelationship = isset($_POST['krelationship']) ? trim($_POST['krelationship']):'';

$random = rand(100000,999999);
$student_No="CS".$random;
$password = time();
$username = $firstName."@".$lastName;
$access_Level=$role;
$passport = $_FILES["uploadFile"]['name'];
$passport = explode(".",$passport);
$extension = $passport[1];
$filename = time().".".$extension;
$passport = "uploads/".$filename;
		move_uploaded_file($_FILES["uploadFile"]['tmp_name'], $passport);

$student_registration_query = "insert into registered_stud(class_Id,student_No,surname,first_Name,middle_Name,sex,passport,date_Of_Birth,year_Of_Entry,nationality,state,
                                                                lga,address,mobile_No,email,religion,mother_Tongue,ssurname,sfirst_Name,sother_Name,saddress,soccupation,srelationship,ksurname,kfirst_Name,kother_Name,kaddress,koccupation,krelationship)
                        values('$class_Id','$student_No','$surname','$firstName','$middleName','$sex','$passport','$dateOfBirth','$yearOfEntry','$nationality','$state',
                        '$lga','$address','$mobileNo','$email','$religion','$motherTongue','$ssurname','$sfirstName','$sotherName','$saddress','$soccupation','$srelationship','$ksurname','$kfirstName','$kotherName','$kaddress','$koccupation','$krelationship')";
$student_registration_result = mysql_query($student_registration_query);
//                      values('$username','$password','$access_Level')";
//$InsertUsers_result= mysql_query($InsertUsers_query);
if(isset($student_registration_result)){
$msg = "Student Successfully Registered";
header('Location:stud_registration.php?error='.$msg);
}
?>
