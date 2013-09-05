<?php
include "header.php";
include('nav_bar.php')
?>
<?php
    $class_Id = $_GET['class_Id'];
    $class_query = "select * from class where class_Id='$class_Id'";
    $class_result = mysql_query($class_query);
    $row = mysql_fetch_array($class_result);
    $school_Id = $row['school_Id'];
    $term_Id = $_GET['term_Id'];
    $session_Id = $_GET['session_Id'];
    $student_Id = $_GET['student_Id'];
    //echo $student_Id;
    $studdetails = get_stud_details($student_Id);
?>
      <?php
if (isset($_POST['submit_scores'])){
	$srid=($_POST['srid']);
	$test_score=($_POST['test_score']);
	$exam_score=($_POST['exam_score']);

    //check if this student scores have been posted
    $sub_score_query = "select * from stud_scores where school_Id='$school_Id' and session_Id='$session_Id' and student_Id='$student_Id' and class_Id='$class_Id'";
    $sub_score_result = mysql_query($sub_score_query) or die(mysql_error());
    if (mysql_affected_rows()>0){
	     echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">Scores already been posted for this student</font></TD></TR></TABLE>";
    }else{

	$empty_flag=0;
	for($i=0;$i<count($test_score);$i++){
		if(($test_score[$i]!="") && ($exam_score[$i]!="") && (is_numeric($test_score[$i])) && (is_numeric($exam_score[$i])) &&
		($test_score[$i] >= 0) && ($test_score[$i] <=40) && ($exam_score[$i] >=0) && ($exam_score[$i] <=60)){
		    $total_score = $test_score[$i] + $exam_score[$i];
			$score_qry = "INSERT INTO stud_scores(student_Id,school_Id,class_Id,session_Id,term_Id,subject_Id,test_score,exam_score,total_score,grade_value,has_scores)
                                     VALUES('$student_Id','$school_Id','$class_Id','$session_Id','$term_Id','$srid[$i]','$test_score[$i]','$exam_score[$i]','$total_score','','1')";
            $score_result = mysql_query($score_qry);
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
}
?>
      <form action="" method="post" enctype="multipart/form-data">
       <fieldset>
        <legend><strong>Enter Student's Result:
      </strong> </legend>
        <table width="700" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Student Result Entry</h2></td>
          </tr>
        <?php
  // check if this students have registered subject for this class, term and session
         $query = "select * from subject where school_Id='$school_Id'";
         $result = mysql_query($query) or die(mysql_error());
         if (mysql_affected_rows()<1){
	     echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No registered student available</font></TD></TR></TABLE>";
 }else {
   $stud = $_GET['student_Id'];
   $student_details = get_stud_details($student_Id);
    ?>
          <tr>
            <td height="30" align="left" valign="middle" bgcolor="#F7F7F7" class="ruler"><b>Student Unique ID:</b> <?php echo $student_details['student_No']; ?></td>
            <td height="30" align="left" valign="middle" bgcolor="#F7F7F7" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td height="30" align="left" valign="middle" bgcolor="#F7F7F7" class="ruler"><strong>Full Name: </strong><strong><?

	$stud_query = "select * from registered_stud where student_Id='$stud'";
	$stud_result = mysql_query($stud_query);
	$stud_row = mysql_fetch_array($stud_result); 
	echo $stud_row['surname']." ".$stud_row['first_Name']." ".$stud_row['middle_Name'];
	?></strong></td>
            <td height="30" colspan="15" align="left" valign="middle" bgcolor="#F7F7F7" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td width="157" height="30"><b>S/No</b></td>
            <td width="129"><b>Subject Title</b></td>
            <td width="198"><b>Test scores</b></td>
            <td width="196"><b>Exam Scores</b></td>
          </tr>
          <?php
   $sn = 0;
   while ($subject_reg = mysql_fetch_array($result)){
   ?>
          <tr>
            <td><?php echo ++$sno; ?></td>
            <td><?php $subject = get_subject_details($subject_reg['subject_Id']); echo $subject['subject_Name']?></td>
            <td align="left"><input type="text" name="test_score[]" /></td>
            <td><input type="text" name="exam_score[]" /></td>
            <input name="srid[]" type="hidden" value="<?php echo $subject_reg['subject_Id']; ?>" />
          </tr>
                      <?php }
   }
 ?>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Browse Course Reg" /></td>
            <td align="center"><input type="submit" name="submit_scores" value="Submit" /></td>
            <td colspan="2"  align="left" valign="middle"><strong>&nbsp;</strong></td>
          </tr>
        </table>
      </form>
      </div>

</div>
</body>
</html>