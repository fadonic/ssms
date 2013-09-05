<?php
include('dbfunctions.php');
$class = isset($_POST['class_id']) ? trim($_POST['class_id']) : '';
$session = isset($_POST['session_Id']) ? trim($_POST['session_Id']) : '';
$term = isset($_POST['term_Id']) ? trim($_POST['term_Id']) : '';
$amount = isset($_POST['amount']) ? trim($_POST['amount']) : '';
$query = "INSERT INTO school_fee(class_Id,session,term,amount)
		  VALUES('$class','$session','$term','$amount')";
$result = mysql_query($query);
if(isset($result)){
$msg = "Payment Successfully Added";
header('Location:fee_payment_reg.php?error='.$msg);
}
?>