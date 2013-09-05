<?php
include "header.php";
include('nav_bar.php');
?>
      <?php
if (isset($_GET['staff_id'])){
	$query ="delete from registered_staff where staff_Id='$_GET[staff_id]'";
	$result = mysql_query($query) or die(mysql_error());
   echo "<script language=javascript> alert('Staff Record deleted');</script>";
}
?>
 
        <table width="796" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td height="10" colspan="4" align="left" valign="middle" class="ruler" ><h2>Staff Results List</h2></td>
          </tr>
          <?php
   $staff_query = "select * from registered_staff order by staff_Id";
   $staff_result = mysql_query($staff_query) or die(mysql_error());
   if (mysql_affected_rows()<1){
   echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No staff available</font></TD></TR></TABLE>";
   }else{
  ?>
          <tr>
            <td width="35" height="31" align="left" valign="middle" bgcolor="#ededed" class="ruler" ><strong>S/No</strong></td>
            <td width="191" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Staffs</strong></td>
            <td width="236" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
          <?php
		  $sno = 0;
          $colour = "";
		  while($row = mysql_fetch_array($staff_result)){
			   // change colour for each alternate row
		  if($colour == "#ffffff")  //#ededed
			$colour = "#ededed";  //#f7f7f7
		  else
			$colour = "#ffffff"; //#ededed
		  ?>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo ++$sno; ?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>"><?php echo $row['title']." ".$row['surname']." ".$row['middle_Name']." ".$row['first_Name']; ?></td>
            <td height="21" align="right" valign="middle" bgcolor="<?php echo $colour; ?>" ><a href="view_staff.php?staff_id=<?php echo $row['staff_Id'] ?>"><img src="images/delete.png"></a></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <?php
		  }
   }
		  ?>
          <tr>
            <td height="17" colspan="4" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
        </table>
    
      </div>
  
</div>
</body>
</html>
<?php
  // }
   ?>