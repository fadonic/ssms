<?php
include "header.php";
include('nav_bar.php');
?>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
     <table width="164" height="42" align="left">

       <form action="trans_add_subject.php" method="post" enctype="multipart/form-data">

    <?php
    $class_Id = $_POST['class_Id'];
	$term_Id = $_POST['term_Id'];
	$session_Id = $_POST['session_Id'];
   // echo $class_Id;
   // echo $term_Id;
    //echo $session_Id;

// check if scores hav been posted for d required details
$query = "select * from stud_scores where has_scores=1 and term_Id='$term_Id' and session_Id='$session_Id'
                         and class_Id='$class_Id' group by student_Id";
$result = mysql_query($query) or die(mysql_error());
if (mysql_affected_rows()<1){
	echo "<div align=left><font color=red><strong><br>Sorry, no scores posted to compute results</font></strong>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();><font color=blue><b>Back</b></font></div>";
}else {
	$index =0;
 while($sub_score_reg = mysql_fetch_array($result)){
 	$students[$index] = $sub_score_reg['student_Id'];
 	$index = $index + 1;
    echo $students[$index];
 }
 for ($i = 0; $i < sizeof($students); $i++){
 	$student_Id = $students[$i];
 	//$studdata_id = $course_reg['studdata_id'];
 	$query2 = "select * from stud_scores where class_Id='$class_Id' and  session_Id='$session_Id' and term_Id='$term_Id' and
 	          student_Id='$student_Id' and has_scores='1'";
 	$result2 = mysql_query($query2) or die(mysql_error());
 	$tsc = 0;
    $tns=0;
    $avs=0;
 	while ($sub_score_reg2 = mysql_fetch_array($result2)){
 		$stud_scores = get_subject_details($sub_score_reg2['scores_Id']);
 		$subject_Id = $subject['scores_Id'];
 		$stud_scores_Id = $sub_score_reg2['scores_Id'];
 		$test_score = $sub_score_reg2['test_score'];
 		$exam_score = $sub_score_reg2['exam_score'];
 		$total_score =$sub_score_reg2['total_score'];
 		// track total suject  registered , sum total and computer average
 		$tsc+= $stud_scores['total_score'] ;
        $tns = mysql_num_rows($result2);
        $avs = $tsc/$tns;
         // get grade point and update stud_scores
 		$grade = getGrade($total_score);
 		$grade_point = getPoint($grade);

 	   $update_sub_reg_query = "update stud_scores set grade_Value='$grade_point' where scores_Id='$stud_scores_Id'";
 	   $update_sub_reg_result = mysql_query($update_sub_reg_query) or die('Cannot update stud_scores_reg wit grade_val');
 	}

     // check duplicates of results
 	$sql = "select * from result_sheet where student_Id='$student_Id' and term_Id='$term_Id' and session_Id='$session_Id' and class_Id='$class_Id'";
 	$result = mysql_query($sql) or die('Cannot select from result sheet');
 	if (mysql_affected_rows()>0){
 		// if result already exist for query ignore
        //echo 'result exist';
       // echo $tsr;
 	}else {

 	    // insert matno, name, course result details includin gp, cgp, tcr, wgp
 	$result_sheet_query = "insert into result_sheet(term_Id, session_Id, school_Id, student_Id, class_Id, total_score,total_subject,average)
                        values('$term_Id','$session_Id','$school_Id','$student_Id','$class_Id','$tsc','$tns','$avs')";
 	$result_sheet_result = mysql_query($result_sheet_query) or die('Cannot insert into result_sheet');

 	}

 }
 echo "<div><br><font color=Green><strong>Results computed successfully</strong></font>";
 echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();>Go Back</a></div>";
 } //end general computation & top else

?>
</table>