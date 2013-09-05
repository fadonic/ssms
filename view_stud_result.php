<?php
include "header.php";
//include('nav_bar.php');
?>
<?php
$term_Id = $_POST['term_Id'];
$session_Id = $_POST['session_Id'];
$class_Id = $_POST['class_Id'];
$term = get_term_details($term_Id);
$session = get_session_details($session_Id);
$class= get_class_details($class_Id)
?>
 <form action="cum_results.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">

 <fieldset style="width: 100%"><legend><strong>Student Results

     </strong></legend>
       <?

  //get school type Id

       $squery = "select * from stud_scores where class_Id='$class_Id'";
       $sresult = mysql_query($squery) or die(mysql_error());
       $school_Id=mysql_fetch_array($sresult);
   //end get school type Id

       $query = "select * from result_sheet where term_Id='$term_Id' and
        session_Id='$session_Id' and class_Id='$class_Id'";
       $result = mysql_query($query) or die(mysql_error());
if (mysql_affected_rows()<1){
	echo "<br><b>Sorry, No Results found</font></b>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();><font color=blue><b>Back</b></font>";
}else {
	 // get subjects for selected class and term and session
		$sql2 = "select * from subject where  school_Id='$school_Id[school_Id]'";
		$result2 = mysql_query($sql2) or die(mysql_error());

		$index = 0;
		while ($row = mysql_fetch_array($result2)) {
		$term_session_subjects[$index] = $row['subject_Id'];
		$index++;
		}

		$ss_length = sizeof($term_session_subjects);
		$ss_length_span = $ss_length;
	   echo "<table id=demo_table cellpadding=3 cellspacing=0 border=1 width=100% align=center>";
       echo "<tr><td>S/no</td><td>STUDENT NO</td><td>CANDIDATE NAME</td><td colspan='$ss_length_span' align='center'>SUBJECTS</td>";
       echo "<td>TOTAL</td><td>AVERAGE<td>REMARK</td>" ;
       //end of 1st heading

       //start of 2nd heading
       echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>";


		for ($i = 0; $i < $ss_length; $i++){
		     $ss_id = $term_session_subjects[$i];
		     echo "<td>";
		     echo get_ss_code($ss_id);
		     echo "</td>";
		}
       echo  "<td>Total Score</td><td>Average Score</td><td>Remark</td></tr>";
		// end of 2nd heading

        $sql3 = "select * from result_sheet where term_Id='$term_Id' and class_Id='$class_Id' and  session_Id='$session_Id'";
		$result3 = mysql_query($sql3) or die(mysql_error());
		$sno = 0;
        echo   "<strong>CLASS:&nbsp&nbsp&nbsp&nbsp".strtoupper($class['class_Name']).",&nbsp&nbsp&nbsp&nbsp".strtoupper($term['term_Name'])."&nbsp&nbspTERM,&nbsp&nbsp".$session['session_Name']."&nbsp&nbsp&nbsp&nbspRESULT</strong>";
		while ($row = mysql_fetch_array($result3)) {
			$student_Id = $row['student_Id'];
            $studdetails = get_stud_details($student_Id);

           echo "<tr><td>".++$sno."</td><td>".$studdetails['student_No']."</td><td>".get_stud_name($student_Id)."</td>";


		    for ($i = 0; $i < $ss_length; $i++){
			  	  $ss_id = $term_session_subjects[$i];
			  	  echo "<td>";
			  	  echo get_ss_score($student_Id, $ss_id, $class_Id);
			  	  echo "<br>";
			  	  echo get_ss_grade($student_Id, $ss_id, $class_Id);
			  	  echo " ";
			  	  echo get_ss_gp($student_Id, $ss_id, $class_Id);
			  	  echo "</td>";
			  }
			  echo "<td>".$row['total_score']."</td>";
			  echo "<td>".$row['average']."</td>";
			  echo "<td>".$row['wgp']."</td>";

			//  echo //"<td>".get_stud_remark($studdata_id)."</td></tr>";
		}


       echo"</table>";
       //echo "<div align=center><input type=submit value=Cancel><input type=submit value=Print></div>";
       }
		?>
      </fieldset>
      <?
      echo "<div align=center><a href=javascript:history.back();><input type=\"button\" name=\"button\" id=\"button\" value=\"Cancel\" /></a><a href=javascript:window.print();><input type=\"button\" name=\"button\" id=\"button\" value=\"e-Print\" /></a></div>";
      //echo "<div align=center><a href=javascript:history.back();><input type=\"button\" name=\"button\" id=\"button\" value=\"Print\" /></a></div>";
      ?>
      </form>
      </div>

</div>
</body>
</html>