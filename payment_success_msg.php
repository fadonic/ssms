<?php
include "header.php";
include "nav_bar.php";
?>
<?php
  	$cur_semester = get_cur_term();
	$cur_session = get_cur_session();
    $class_Id = $_GET['class_Id'];
    $student_Id = $_GET['student_Id'];
    $term_Id = $_GET['term_Id'];
    $session_Id = $_GET['session_Id'];
//echo $school_Id;
//echo $term_Id;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Management System</title>

<link href="000000001.css" rel="stylesheet" type="text/css" />
<link href="000000003.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="body-container">
<div class="main-container">
<form action="" method="post" enctype="multipart/form-data" class="success-msg">
  <div>Payment Sucessfully Made for this Student  <? echo "<a style=text-decoration:none href=receipt_of_payment.php?session_Id=$session_Id&term_Id=$term_Id&class_Id=$class_Id&student_Id=$student_Id>Click to print eReceipt...</a>"; ?></div>
</form>