<?php
include "dbfunctions.php";
?>
<?php
  	$cur_semester = get_cur_term();
	$cur_session = get_cur_session();
    $class_Id = $_GET['class_Id'];
   //echo $class_Id;
    $class_query = "select * from class where class_Id='$class_Id'";
    $class_result = mysql_query($class_query);
    $row = mysql_fetch_array($class_result);
    $school_Id = $row['school_Id'];
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
<div class="header-container">
  <div class="welcome">
  <div class="user">Welcome User: Miss Mercy Yakubu. January 2013, 12:30pm</div>
  <div class="logo"><img src="images/s21.jpeg" alt="" width="122" height="122" /></div>
  </div>
</div>
<div class="body-container">
  <div class="top-nav-wrapper">
    <div class="home">Home</div>
    <div class="top-nav-container">
    <ul class="top-nav-ul">
    <li>Staff Menu</li>
    <li>Account Settings</li>
    <li>Profile Settings</li>
    <li>Password Modify</li>

    </ul>
    </div>
  </div>  <div class="left-nav-container">
  <ul class="left-nav-ul">
  <li>Registration</li>
  <li>My Result</li>
  <li>Fee Payment</li>
  <li>My Subjects</li>
  <li>Fee Payment</li>
  </ul>
  </div>
      <div class="main-container">
      <?php
$student_Id = $_GET['student_Id'];
$school_Id = $_GET['school_Id'];
$term_Id = $_GET['term_Id'];
$session_Id = $_GET['session_Id'];
$class = $_GET['class'];
$studdetails = get_stud_details($student_Id);
?>
<?php
if (isset($_POST['submit_scores'])){
	$srid=($_POST['srid']);
	$test_score=($_POST['test_score']);
	$exam_score=($_POST['exam_score']);

	$empty_flag=0;
	for($i=0;$i<count($test_score);$i++){
		if(($test_score[$i]!="") && ($exam_score[$i]!="") && (is_numeric($test_score[$i])) && (is_numeric($exam_score[$i])) &&
		($test_score[$i] >= 0) && ($test_score[$i] <=40) && ($exam_score[$i] >=0) && ($exam_score[$i] <=60)){
			updStudResult($srid[$i],$test_score[$i],$exam_score[$i]);
			++$empty_flag;
		}
	}
	// if number of elements in empty_flag == test_score, it is successful
	if($empty_flag == count($test_score)){
		echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=blue>your entry was submitted.</font></TD></TR></TABLE>
		<p></p>";
	}else{
		echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=red>Invalid entry, Note: Test score should be between 0 and 40, Exam score between 0 and 60
		</font>&nbsp;&nbsp;<a href=javascript:history.back();>Go back</a></TD></TR></TABLE>
		<p></p>";
	}


}
?>
<form action="" method="post" enctype="multipart/form-data">
  <table width="700" style="border: 1px solid #d5dfec;">
    <!--DWLayoutTable-->

  <tr>
    <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Student Result Entry</h2></td>
  </tr>
<?php
  // check if this students have registered for this semester and session
$query = "select * from course_reg where course_flag=1 and semester_id='$semester_id' and
        session_id='$session_id' and dept_id='$dept_id' and level='$level' and studdata_id='$studdata_id'";
$result = mysql_query($query) or die(mysql_error());
if (mysql_affected_rows()<1){
	echo "<br>Sorry, No registered students found";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();><font color=blue><b>Back</b></font>";
}else {
    ?>
  <tr>
    <td colspan="18" align="left" valign="middle" class="ruler"><b>Mat No:</b> <?php echo $studdetails['matNo']; ?></td>
  </tr>
  <tr>
    <td><b>S/No</b></td><td><b>Course Title</b></td>
    <td><b>Test scores</b></td><td><b>Exam Scores</b></td>
  </tr>
 <?php
   //$sn = 0;
  while ($course_reg = mysql_fetch_array($result)){
   ?>
   <tr>
    <td><?php echo ++$sno; ?></td><td><?php $course = get_course_details($course_reg['course_id']); echo $course['course_title']?></td>
    <td align="left"><input type="text" name="test_score[]"></td><td><input type="text" name="exam_score[]"></td>
    <input name=crid[] type=hidden value="<?php echo $course_reg['id']; ?>">
  </tr>
  <?php }
    }
 ?>
  <tr>
    <td  align="left" valign="middle">&nbsp;</td>
    <td  align="left" valign="middle"><input type="hidden" name="action" value="Browse Course Reg"></td>
    <td align="center"><input type="submit" name="submit_scores" value="Submit"></td>
    <td  align="left" valign="middle"><strong>&nbsp;</strong> </td>
    <td  align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
</form>
<?php
//include "footer.php";
?>