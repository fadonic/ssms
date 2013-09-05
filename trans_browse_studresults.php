<?php
include "header.php";
include('nav_bar.php');
   $class_Id = $_POST['class_Id'];
   $studs_query = "select * from class  where class_Id='$_POST[class_Id]'";
   $studs_result = mysql_query($studs_query) or die(mysql_error());
   $sr = mysql_fetch_array($studs_result);
   
?>
<fieldset>
        <legend><strong>Viewing Registered Students:
      </strong> </legend>
     <?php
	$cur_term = get_cur_term();
	$cur_session = get_cur_session();




// check if this students have registered for this semester and session
$query = "select * from registered_stud where  class_Id='$_POST[class_Id]' group by student_Id";
$result = mysql_query($query) or die(mysql_error());
if (mysql_affected_rows()<1){
	echo "<br>Sorry, No registered students found";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=javascript:history.back();><font color=blue><b>Back</b></font>";
}else {
    echo " <table width=\"700\" style=\"border: 1px solid #d5dfec;\">";
    echo "<tr>
          <td colspan=\"5\" align=\"left\" valign=\"middle\" class=\"ruler\" bgcolor=\"#dddddd\"><h2>Registered $sr[class_Name] students</h2></td>
          </tr>";
    echo "<tr>
          <td colspan=\"5\" align=\"left\" valign=\"middle\" class=\"ruler\" bgcolor=\"#dddddd\">&nbsp;</td>
          </tr>";
    ?>
    <tr>
    <td align="center" bgcolor="#ededed"><b>Student ID</b></td><td bgcolor="#ededed"><b>Full Name</b></td><td bgcolor="#ededed"><b>Action</b></td><td bgcolor="#ededed">&nbsp;</td>
   </tr>
    <?php

  while ($row = mysql_fetch_array($result)){
  	//$studdetails = get_stud_details($row['studdata_id'])
   ?>
  <tr>
    <td align="center"><?php echo $row['student_No']; ?></td><td><?php echo $row['surname']." ".$row['first_Name']." ".$row['middle_Name']; ?></td>
    <td><?php echo "<a href=\"add_stud_results.php?student_Id=$row[student_Id]&session_Id=$cur_session[session_Id]&class_Id=$class_Id&
                    term_Id=$cur_term[term_Id]\"><img src='images/process.gif' title='add results'></a>"?></td><td>&nbsp;</td>
  </tr>
  <?php }
     echo "</table>";
    }

 ?>


<?php
//include "footer.php";
?>
