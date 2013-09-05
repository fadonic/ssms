<?php
include "header.php";
include('nav_bar.php');
$sch = trim($_POST['school_Id']);
?>
      <?php
if (isset($_GET['subject_id'])){
	$query ="delete from subject where subject_Id='$_GET[subject_id]'";
	$result = mysql_query($query) or die(mysql_error());
   echo "<script language=javascript> alert('Subject Record deleted');</script>";
}
?>
 
        <table width="728" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td height="10" colspan="7" align="left" valign="middle" class="ruler" ><h2>Subjects Results List</h2></td>
          </tr>
          <?php

   $subject_query = "select * from subject order by school_Id";
   $subject_result = mysql_query($subject_query) or die(mysql_error());
   if (mysql_affected_rows()<1){
   echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No subject available</font></TD></TR></TABLE>";
   }else{
  ?>
          <tr>
            <td width="35" height="31" align="left" valign="middle" bgcolor="#ededed" class="ruler" ><strong>S/No</strong></td>
            <td width="191" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Subjects</strong></td>
            <td width="236" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Subject Category</strong></td>
            <td width="122" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="35" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="53" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="24" height="31" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
          <?php
		  $sno = 0;
          $colour = "";
		  while($row = mysql_fetch_array($subject_result)){
		  $school_Id = $row['school_Id'];
          //echo $school_Id;
		  $school = get_school_details($school_Id);
			   // change colour for each alternate row
		  if($colour == "#ffffff")  //#ededed
			$colour = "#ededed";  //#f7f7f7
		  else
			$colour = "#ffffff"; //#ededed
		  ?>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo ++$sno; ?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>"><?php echo $row['subject_Name']; ?></td>
            <td height="21" align="right" valign="middle" bgcolor="<?php echo $colour; ?>" ><div align="left"><?php echo $school;?></div></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><a href="view_subject.php?subject_id=<?php echo $row['subject_Id']; ?>"><img src="images/delete.png" alt="" /></a></td>
            <td height="21" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
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
    
      </div>
  
</div>
</body>
</html>
<?php
  // }
   ?>