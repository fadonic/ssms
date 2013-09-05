<?php
include "header.php";
include('nav_bar.php');
?>
<?php
  $class = trim($_POST['class_id']);
  $term = trim($_POST['term_Id']);
  $session = trim($_POST['session_Id']);
  $class_details = get_class_details($class);
  $student_query = "select * from registered_stud where class_Id='$class' order by student_Id";
  $student_result = mysql_query($student_query) or die(mysql_error());
   if(mysql_affected_rows()>0){
?>
  <style type="text/css">
<!--
.tln {
	border: thin solid #CCCCCC;
}
-->
  </style>

<form action="payment.php" method="post" enctype="multipart/form-data">
<fieldset>
  <legend><strong>Student School_Fee Payment:
       </strong> </legend>
  <table width="728" align="center" style="border: 1px solid #d5dfec;">
    <!--DWLayoutTable-->
    <tr>
      <td height="10" colspan="7" align="left" valign="middle" class="ruler" ><h2><? echo $class_details['class_Name'];?>Students  List </h2></td>
    </tr>
    <?php
   $stud_query = "select * from registered_stud where class_Id='$class' order by student_Id";
   $stud_result = mysql_query($stud_query) or die(mysql_error());
   if (mysql_affected_rows()<1){
   echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No student Record Found</font></TD></TR></TABLE>";
   }else{
  ?>
    <tr>
      <td width="35" height="31" align="left" valign="middle" bgcolor="#ededed" class="ruler" ><strong>S/No</strong></td>
      <td width="191" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Name</strong></td>
      <td width="247" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Unique ID</strong></td>
      <td width="45" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="101" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="53" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="24" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <?php
		  $sno = 0;
          $colour = "";
		  while($row = mysql_fetch_array($stud_result)){
			   // change colour for each alternate row
		  if($colour == "#ffffff")  //#ededed
			$colour = "#ededed";  //#f7f7f7
		  else
			$colour = "#ffffff"; //#ededed
		  ?>
      <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo ++$sno; ?></td>
      <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>"><?php echo $row['surname']." ".$row['middle_Name']." ".$row['first_Name']; ?></td>
      <td height="21" align="right" valign="middle" bgcolor="<?php echo $colour; ?>" ><div align="left"><?php echo $row['student_No'];?></div></td>
      <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo "<a href=\"payment.php?student_Id=$row[student_Id]&term=$term&session=$session&class_Id=$class\"><img src='images/process.gif' title='Make school fee Payment'></a>"?></td>
      <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td height="21" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td height="21" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <?php
		  }
   }
		  ?>
    <tr>
      <td height="17" colspan="7" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
  </table>
</form> 
<?php
}
//include "footer.php";
?>
