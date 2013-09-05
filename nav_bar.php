<?php
session_start();
$access_level = $_SESSION['access_level'];
$userId = $_SESSION['users_id'];
//$roleName = get_username($roleId);

		if (($access_level ==1) ){// administrator
		   //	$staff_info = get_staff_info($_SESSION['username']);
		 ?>
 <div class="body-container">
  <div class="top-nav-wrapper">
    <div class="home"><a href="main.php" >Home</a></div>
    <div class="top-nav-container">
    <ul class="top-nav-ul">
    <li><a href="staffdata_edit.php">Profile Setting</a></li>
    <li><a href="usrmgt.php">Modify Password</a></li>
    <li><a href="sessions.php">Set Session</a>
    <li><a href="terms.php">Set Term</a>
    </li>

    </ul>
    </div>
  </div>  <div class="left-nav-container">
  <ul class="left-nav-ul">
  <li><a href="staff_registration.php">Staff Registration</a></li>
  <li><a href="stud_registration.php">Student Registration</a></li>
  <li><a href="add_subject_.php">Subject Registration</a></li>
  <li><a href="student_by_class.php">Registered Student</a></li>
  <li><a href="view_staff.php">Registered Staff</a></li>
  <li><a href="view_subject.php">Registered Subject</a></li>
  <li><a href="view_student_by_class.php">Student Records</a></li>
  </ul>
  <br style="clear: left;" />
  </div>
<?php
}

?>

<?php	if (($access_level ==3) ){// Staff
?>
<div class="body-container">
  <div class="top-nav-wrapper">
    <div class="home"><a href="main.php" >Home</a></div>
    <div class="top-nav-container">
    <ul class="top-nav-ul">
    <li><a href="staffdata_edit.php">Profile Setting</a></li>
    <li><a href="usrmgt.php">Modify Password</a></li>

    </ul>
    </div>
  </div>  <div class="left-nav-container">
  <ul class="left-nav-ul">
  <li><a href="browse_studresults.php">Add Result</a></li>
  <li><a href="view_to_compute.php">Compute Result</a></li>
  <li><a href="cum_results.php">View Overall Result</a></li>
  <li><a href="stud_result.php">View Single Result</a></li>
  </ul>
  </div>
<?php
}
?>

<?php	if (($access_level ==4) ){// Bursar
?>
<div class="body-container">
  <div class="top-nav-wrapper">
    <div class="home"><a href="main.php" >Home</a></div>
    <div class="top-nav-container">
    <ul class="top-nav-ul">
    <li><a href="staffdata_edit.php">Profile Setting</a></li>
    <li><a href="usrmgt.php">Modify Password</a></li>

    </ul>
    </div>
  </div>  <div class="left-nav-container">
  <ul class="left-nav-ul">
  <li><a href="fee_payment_reg.php">Payment Registration</a></li>
  <li><a href="payment_by_class.php">Fee Payment</a></li>
  <li><a href="viewPayment_by_class.php">View Payment</a></li>
  </ul>
  </div>
<?php
}
?>

<?php	if (($access_level ==6) ){// card generator Administrator
?>
<div class="body-container">
  <div class="top-nav-wrapper">
    <div class="home"><a href="main.php" >Home</a></div>
    <div class="top-nav-container">
    <ul class="top-nav-ul">
    <li><a href="staffdata_edit.php">Profile Setting</a></li>
    <li><a href="usrmgt.php">Modify Password</a></li>

    </ul>
    </div>
  </div>  <div class="left-nav-container">
  <ul class="left-nav-ul">
  <li><a href="card_by_class.php">Generate Student Card</a></li>
  </ul>
  </div>
<?php
}
?>
