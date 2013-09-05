<?php
//include "header.php";
//include "nav_bar.php";
include('dbfunctions.php');
?>
<script language="javascript">

</script>
<style type="text/css">
.t1 {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #693;
	border-right-color: #693;
	border-bottom-color: #693;
	border-left-color: #693;
	border-bottom-left-radius:12px;
	border-top-right-radius:12px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	background-image: url(images/bgimgt.png);
}
.t2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: none;
	border-right-style: dotted;
	border-bottom-style: solid;
	border-left-style: dotted;
	border-top-color: #693;
	border-right-color: #693;
	border-bottom-color: #693;
	border-left-color: #693;
	background-image: url(images/bgimgt.png);
}
.t3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #693;
	border-right-color: #693;
	border-bottom-color: #693;
	border-left-color: #693;
	background-image: url(images/bgimgt.png);
}
.t4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #693;
	border-right-color: #693;
	border-bottom-color: #693;
	border-left-color: #693;
	background-image: url(images/bgimgt.png);
}
.line {	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #292929;
}
</style>
<?php
$attendance_value = $_POST['attendance_value'];
$no_of_absent = $_POST['no_of_absent'];
$no_time_schoolopen=$_POST['no_time_schoolopen'];
$term_Id = $_POST['term_Id'];
$session_Id = $_POST['session_Id'];
$class_Id = $_POST['class_Id'];
$student_Id = $_POST['student_Id'];
$num_of_stud = get_num_stud($class_Id) ;
$studname = get_stud_name($student_Id);
$class = get_class_details($class_Id);
$term = get_term_details($term_Id);
$session = get_session_details($session_Id);
$student_details = get_stud_details($student_Id);
//echo $class_Id;
$attendance = $_POST['attendance'];
$attentiveness=$_POST['attentiveness'];
$neatness = $_POST['neatness'];
$politeness = $_POST['politeness'];
$selfcontrol = $_POST['selfcontrol'];
$punctuality = $_POST['punctuality'];
$relationship = $_POST['relationship'];
$handwriting = $_POST['handwriting'] ;
$music = $_POST['music'];
$drama = $_POST['drama'];
$sport =$_POST['sport'];
$crafts = $_POST['crafts'];
$clubs = $_POST['clubs'];
$hobbies = $_POST['hobbies'];



$squery = "select * from stud_scores where class_Id='$class_Id' and term_Id='$term_Id' and session_Id='$session_Id' and student_Id='$student_Id'";
$sresult = mysql_query($squery) or die(mysql_error());
//$row=mysql_fetch_array($sresult);
   //end get school type Id

$query = "select * from result_sheet where term_Id='$term_Id' and session_Id='$session_Id' and
              class_Id='$class_Id' and student_Id='$student_Id'";
$result = mysql_query($query) or die(mysql_error());
if (mysql_affected_rows()<1){
   echo "<br><b>Sorry, No Results found</font></b>";
   echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();><font color=blue><b>Back</b></font>";
}else {

?>
<body>

<table width="60%" align="center" class="t1">
              <tr>
                <td width="19%" height="23" valign="top">&nbsp;</td>
                <td width="59%" height="23" valign="top">&nbsp;</td>
                <td width="22%" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="19%" rowspan="4" valign="top"><img src="images/s21.jpeg" alt="" width="123" height="101"></td>
                <td valign="top"><h1 align="center">Custom Secondary School, Akure</h1></td>
                <td width="22%" rowspan="4" valign="top"><img src="<?php if ((empty($student_details['passport']))){ echo "uploads/no_photo.png";}else{ echo $student_details['passport'];} ?>" alt="" width="118" height="116"></td>
              </tr>
              <tr>
                <td valign="top"><div align="center"><strong>ONDO STATE.</strong></div></td>
              </tr>
              <tr>
                <td valign="top"><div align="center">STATE HOSPITAL ROAD, P.M.B 649, AKURE, NIGERIA.</div></td>
              </tr>
              <tr>
                <td valign="top"><div align="center">EMAIL: customsecondaryschool@yahoo.com</div></td>
              </tr>
              <tr>
                <td width="19%" height="17" valign="top">&nbsp;</td>
                <td valign="top"><div align="center">Tel: 034909090990, 034-2038989</div></td>
                <td width="22%" valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="39">&nbsp;</td>
                <td><div align="center"><strong>REPORT SHEET</strong></div></td>
                <td>&nbsp;</td>
              </tr>
</table>              <table width="60%" align="center" class="t2">
              <tr>
                <td colspan="7" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
              <tr>
                <td width="16%" style="border: 1px solid #d5dfec;"><strong>Report for  </strong></td>
                <td width="17%" style="border: 1px solid #d5dfec;"><? echo $term['term_Name'];?></td>
                <td colspan="2" style="border: 1px solid #d5dfec;">Term</td>
                <td colspan="2" style="border: 1px solid #d5dfec;"><? echo $session['session_Name'];?></td>
                <td width="9%" style="border: 1px solid #d5dfec;">Session</td>
              </tr>
              <tr>
                <td style="border: 1px solid #d5dfec;"><strong>Name of Student</strong></td>
                <td style="border: 1px solid #d5dfec;"><? echo $studname;?></td>
                <td width="14%" style="border: 1px solid #d5dfec;"><strong>Student ID</strong></td>
                <td width="16%" style="border: 1px solid #d5dfec;"><? echo $student_details['student_No'];?></td>
                <td colspan="2" style="border: 1px solid #d5dfec;">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td style="border: 1px solid #d5dfec;"><strong>Class</strong></td>
                <td style="border: 1px solid #d5dfec;"><? echo $class['class_Name'];?></td>
                <td colspan="2" style="border: 1px solid #d5dfec;"><strong>Number of Students in the Class</strong></td>
                <td width="5%" style="border: 1px solid #d5dfec;"><? echo $num_of_stud;?></td>
                <td width="23%" style="border: 1px solid #d5dfec;"><strong>No of Times School Open</strong></td>
                <td style="border: 1px solid #d5dfec;"><? echo $no_time_schoolopen; ?></td>
              </tr>
              <tr>
                <td style="border: 1px solid #d5dfec;"><strong>Attendance</strong></td>
                <td style="border: 1px solid #d5dfec;"><? echo $attendance_value; ?></td>
                <td colspan="2" style="border: 1px solid #d5dfec;"><strong>No of Days Absented from School</strong></td>
                <td style="border: 1px solid #d5dfec;"><? echo $no_of_absent;?></td>
                <td style="border: 1px solid #d5dfec;">&nbsp;</td>
                <td style="border: 1px solid #d5dfec;">&nbsp;</td>
              </tr>
              <tr>
                <td height="27">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
  </tr>
            </table>
<table width="60%" align="center" class="t3">
  <tr>
                <td width="17%" height="34"><strong>SUBJECTS  </strong></td>
                <td width="9%"><strong>% SCORE</strong></td>
                <td width="8%" style="border: 1px solid #d5dfec;"><strong>Test Score1</strong></td>
                <td width="8%" style="border: 1px solid #d5dfec;"><strong>Test Score2</strong></td>
                <td width="6%" style="border: 1px solid #d5dfec;">&nbsp;</td>
                <td width="8%" style="border: 1px solid #d5dfec;"><strong>Exam  Score</strong></td>
                <td width="9%" style="border: 1px solid #d5dfec;"><strong>Total Scores</strong></td>
                <td width="10%" style="border: 1px solid #d5dfec;"><strong>Grade</strong></td>
                <td width="10%" style="border: 1px solid #d5dfec;"><strong>Remarks</strong></td>
                <td width="15%" style="border: 1px solid #d5dfec;"><strong>Teachers Signature</strong></td>
  </tr>
              <?
              //$sql2 = "select * from subject where  school_Id='$school_Id[school_Id]'";
	          //$result2 = mysql_query($sql2) or die(mysql_error());
              while ($row = mysql_fetch_array($sresult)) {
                $subject_details = get_subject_details($row['subject_Id']);
                $grade_value = getGradeLetter($row['grade_Value']);
                $remark = getRemark($row['total_score']) ;


              ?>
              <tr>
                <td colspan="2" style="border: 1px solid #d5dfec;"><? echo $subject_details['subject_Name'];?></td>
                <td style="border: 1px solid #d5dfec;"><? echo $row['test_score'];?></td>
                <td style="border: 1px solid #d5dfec;"><? echo 46;?></td>
                <td style="border: 1px solid #d5dfec;">-</td>
                <td style="border: 1px solid #d5dfec;"><? echo $row['exam_score'];?></td>
                <td style="border: 1px solid #d5dfec;"><? echo $row['total_score'];?></td>
                <td style="border: 1px solid #d5dfec;"><? echo $grade_value;?></td>
                <td style="border: 1px solid #d5dfec;"><? echo $remark ;?></td>
                <td style="border: 1px solid #d5dfec;">&nbsp;</td>
              </tr>
              <? } ?>
              <tr>
                <td colspan="10">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="10" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
</table>            <table width="60%" align="center" class="t4">
              <tr>
                <td height="30" colspan="2">No Examined</td>
                <td height="30">54</td>
                <td height="30">&nbsp;</td>
                <td height="30">&nbsp;</td>
                <td height="30">&nbsp;</td>
                <td height="30">Aggregate/Mark %</td>
                <td height="30">87</td>
                <td height="30">&nbsp;</td>
                <td height="30">&nbsp;</td>
              </tr>
              <tr>
                <td width="7%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="14%">&nbsp;</td>
                <td width="5%">&nbsp;</td>
                <td width="5%">&nbsp;</td>
                <td width="5%">&nbsp;</td>
                <td width="23%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="10%">&nbsp;</td>
                <td width="11%">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">CHARACTER DEVELOPMENT</td>
                <td>A-E</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>PRACTICAL SKILL</td>
                <td> (A-E)</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Attendance</td>
                <td><? echo $attendance;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Handwriting</td>
                <td><? echo $handwriting;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Attentiveness</td>
                <td><? echo $attentiveness;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Music</td>
                <td><? echo $music?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Neatness</td>
                <td><? echo $neatness;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Drama</td>
                <td><? echo $drama; ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Politeness</td>
                <td><? echo $politeness;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Sport</td>
                <td><? echo $sport;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Self Control</td>
                <td><? echo $selfcontrol;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Crafts</td>
                <td><? echo $crafts;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Punctuality</td>
                <td><? echo $punctuality; ?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Clubs/Societies</td>
                <td><? echo $clubs;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Relationship with Others</td>
                <td><? echo $relationship;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Hobbies</td>
                <td><? echo $hobbies;?></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">Class Teachers Remarks &amp; Signature</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="4">House Master Remark &amp; Signature</td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="3">Principal's Comments Signature &amp; Date</td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="23" colspan="3">Next Term Begins..................................</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Signature &amp; Date...................</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>
<table width="60%" align="center">
  <tr>
    <td width="35%">&nbsp;</td>
    <td width="53%"><a href="javascript:window.print() "><span class="line"><a href="javascript:history.back()">Back </a>|Click to <a href="javascript:window.print() ">Print Result here</a></span></a></td>
    <td width="12%">&nbsp;</td>
  </tr>
</table>
<h2>&nbsp;</h2></td>

</body>
</html>
<?php
  }
   ?>