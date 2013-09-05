<?php
include('dbfunctions.php'); 
$stud_id = isset($_POST['student_Id']) ? trim($_POST['student_Id']) : '';
$class = isset($_POST['class_Id']) ? trim($_POST['class_Id']) : '';
$session = isset($_POST['session_Id']) ? trim($_POST['session_Id']) : '';
$term = isset($_POST['term_Id']) ? trim($_POST['term_Id']) : '';
$paidAmount = isset($_POST['amount']) ? trim($_POST['amount']) : '';
$requiredAmount = isset($_POST['requiredAmount']) ? trim($_POST['requiredAmount']) : '';
$dateOfPayment = isset($_POST['dateOfPayment']) ? trim($_POST['dateOfPayment']) : '';
//echo $dateOfPay;
//$timeOfPay = isset($_POST['timeOfPay']) ? trim($_POST['timeOfPay']) : '';
$receiptNo = isset($_POST['receiptNo']) ? trim($_POST['receiptNo']) : '';
$query = "INSERT INTO payment(student_Id,class_Id,session_Id,term_Id,required_Amount, paid_Amount,date_Of_Payment,receipt_No)
       VALUES('$stud_id','$class','$session','$term','$requiredAmount','$paidAmount','$dateOfPayment','$receiptNo')";
$result = mysql_query($query);
if(isset($result)){
  header('Location:payment_success_msg.php?action=regStudent'.
  ' & student_Id='.$stud_id.' & term_Id='.$term.'& session_Id='.$session.'&class_Id='.$class);
}
?>