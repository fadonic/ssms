<?php
include "header.php";
include('nav_bar.php');
$sclass = trim($_POST['class_Id']);
$className = get_class_name($sclass);
?>
   <?php
if (isset($_GET['student_id'])){
	$query ="delete from registered_stud where student_Id='$_GET[student_id]'";
	$result = mysql_query($query) or die(mysql_error());
   echo "<script language=javascript> alert('Subject Record deleted');</script>";
}
?>
 
        <table width="728" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td height="10" colspan="8" align="left" valign="middle" class="ruler" ><h2><? echo strtoupper($className);?> Students Results List</h2></td>
          </tr>
          <?php
   $stud_query = "select * from registered_stud  order by class_Id";
   $stud_result = mysql_query($stud_query) or die(mysql_error());
   if (mysql_affected_rows()<1){
   echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No student Record Found</font></TD></TR></TABLE>";
   }else{
  ?>
          <tr>
            <td width="34" height="31" align="left" valign="middle" bgcolor="#ededed" class="ruler" ><strong>S/No</strong></td>
            <td width="190" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Name</strong></td>
            <td width="180" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Unique ID</strong></td>
            <td width="110" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Class</strong></td>
            <td width="48" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="49" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="52" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="29" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
          <?php
		  $sno = 0;
          $colour = "";
		  while($row = mysql_fetch_array($stud_result)){
		   $class_Id = $row['class_Id'];
           $class_Name = get_class_name($class_Id);
		  if($colour == "#ffffff")  //#ededed
			$colour = "#ededed";  //#f7f7f7
		  else
			$colour = "#ffffff"; //#ededed
		  ?>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo ++$sno; ?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>"><?php echo $row['surname']." ".$row['middle_Name']." ".$row['first_Name']; ?></td>
            <td height="21" align="right" valign="middle" bgcolor="<?php echo $colour; ?>" ><div align="left"><? echo $row['student_No'];?></div></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo $class_Name; ?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><a href='studdata_edit.php?student_id=<? echo $row['student_Id']; ?>'><img src="images/b_edit.png" alt="" width="16" height="16" /></a><a href="student_by_class.php?student_id=<?php echo $row['student_Id'] ?>"></a></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><a href="student_by_class.php?student_id=<?php echo $row['student_Id'] ?>"><img src="images/delete.png" alt="" /></a></td>
            <td height="21" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td height="21" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <?php
		  }
   }
		  ?>
          <tr>
            <td height="17" colspan="8" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table>
    
      </div>
  
</div>
</body>
</html>
<?php
  // }
   ?>