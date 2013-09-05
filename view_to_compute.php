<?php
include "header.php";
include('nav_bar.php');
?>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
</style>
 <script type="text/javascript">
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(class_Id,"Please Select Class!")==false)
  {class_Id.focus();return false;}
 }
}
</script>
<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#/209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#/209;&#241;0-9]/ig,''):null;
}
</script>
      <form action="compute_result.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset><legend><strong>Add Subject For:
      </strong> </legend>
        <table width="700" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Computing Results</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler">&nbsp;</td>
          </tr>
          <tr>
            <td width="78"  align="left" valign="middle"><strong>Class:</strong></td>
            <td width="185"  align="left" valign="middle"><select name="class_Id">
            <option value="">.....Select.....</option>
              <?php  
                        $query = "SELECT * FROM class order by class_Id";
						$result = mysql_query($query) or die("Error ".mysql_errno().": ".mysql_error()."<br><br>$query");
						$index = 0;
						while($row = mysql_fetch_assoc($result)) {
							$index++;
					   ?>
              <option value="<?php echo $row['class_Id'] ?>"><?php echo $row['class_Name'] ?></option>
              <?php } 
                       ?>
            </select></td>
            <td width="67" >&nbsp;</td>
            <td width="72"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="274"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Term:</strong></td>
            <td  align="left" valign="middle"><select name="term_Id">
              <?php  
                        $query = "SELECT * FROM terms where term_Status='active'";
						$result = mysql_query($query) or die("Error ".mysql_errno().": ".mysql_error()."<br><br>$query");
						$index = 0;
						while($row = mysql_fetch_assoc($result)) {
							$index++;
					   ?>
              <option value="<?php echo $row['term_Id'] ?>"><?php echo $row['term_Name'] ?></option>
              <?php } 
                       ?>
            </select></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Session:</strong></td>
            <td  align="left" valign="middle"><select name="session_Id">
              <?php  
                        $query = "SELECT * FROM sessions where session_Status='active'";
						$result = mysql_query($query) or die("Error ".mysql_errno().": ".mysql_error()."<br><br>$query");
						$index = 0;
						while($row = mysql_fetch_assoc($result)) {
							$index++;
					   ?>
              <option value="<?php echo $row['session_Id'] ?>"><?php echo $row['session_Name'] ?></option>
              <?php } 
                       ?>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Browse Course Reg" /></td>
            <td align="center"><input type="submit" name="submit" value="Compute" /></td>
            <td  align="left" valign="middle"><strong>&nbsp;</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
      </fieldset>
      </form>
      </div>
  
</div>
</body>
</html>