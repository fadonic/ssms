<?php
include "header.php";
include('nav_bar.php');
?>
<?php
  $class = trim($_POST['class_id']);
  $term = trim($_POST['term_Id']);
  $session = trim($_POST['session_Id']);
  $class_details = get_class_details($class);
  $session_details = get_session_details($session);
  $term_details = get_term_details($term) ;
?>
        <?php
   $cpayment_query = "select * from payment where class_Id='$class' and term_Id='$term' and session_Id='$session'";
   $cpayment_result = mysql_query($cpayment_query) or die(mysql_error());
   $payment_row = mysql_fetch_array($cpayment_result);
   if (mysql_affected_rows()<1){
   echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=left>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">No student Record Found</font></TD></TR></TABLE>";
   }else{
  ?>
        <table width="1093" align="left" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td height="10" colspan="3" align="left" valign="middle" class="ruler" ><h2>Students Payment List</h2></td>
            <td height="10" colspan="3" align="left" valign="middle" class="ruler" ><strong>
            <? echo strtoupper($class_details['class_Name'])."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$term_details['term_Name']."&nbsp;&nbsp;&nbsp;Term,"."&nbsp;&nbsp;&nbsp;&nbsp;".$session_details['session_Name']."  Session";?></strong></td>
            <td height="10" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td height="10" align="left" valign="middle" class="ruler" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td width="47" height="31" align="left" valign="middle" bgcolor="#ededed" class="ruler" ><strong>S/No</strong></td>
            <td width="164" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Name</strong></td>
            <td width="159" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Student Unique ID</strong></td>
            <td width="159" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Amount Paid</strong></td>
            <td width="170" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Required Amount</strong></td>
            <td width="132" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Balance</strong></td>
            <td width="148" height="31" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Date of Payment</strong></td>
            <td width="78" align="left" valign="middle" bgcolor="#EDEDED" class="ruler" ><strong>Receipt No.</strong></td>
          </tr>
          <tr>
          <?php
		  $sno = 0;
          $colour = "";
		  while($row = mysql_fetch_array($cpayment_result)){
		    $student_Id = $row['student_Id'];
		    $studname = get_stud_name($student_Id);
            $studdetails = get_stud_details($student_Id);
			   // change colour for each alternate row
		  if($colour == "#ffffff")  //#ededed
			$colour = "#ededed";  //#f7f7f7
		  else
			$colour = "#ffffff"; //#ededed
		  ?>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><?php echo ++$sno; ?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>"><?php echo $studname;?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $studdetails['student_No'];?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $row['paid_Amount'];?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $row['required_Amount'];?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $row['required_Amount']-$row['paid_Amount'];?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $row['date_Of_Payment'];?></td>
            <td height="21" align="left" valign="middle" bgcolor="<?php echo $colour; ?>" ><? echo $row['receipt_No'];?></td>
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