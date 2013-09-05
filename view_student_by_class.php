<?php
include "header.php";
include('nav_bar.php');
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
      <form action="student_record_by_class.php" method="post" enctype="multipart/form-data"  onsubmit="return validate_form(this)" >
      <fieldset>
        <legend><strong>Student Record View</strong> </legend>
        <table width="715" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td height="32" colspan="18" align="left" valign="middle" bgcolor="#EAEAEA" class="ruler"><h2>View student by class</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" ><strong>(</strong> Please Enter Student Class<strong>)</strong></td>
          </tr>
          <tr>
            <td width="127" height="32"  align="left" valign="middle"><strong>Choose Class:</strong></td>
            <td width="204" align="left" valign="middle"><select name="class_Id">
             <option value="">.....Select.....</option>
              <?
			  $class_query = "select * from class order by class_Name";
              $class_result = mysql_query($class_query);
			   while($class_row = mysql_fetch_array($class_result)){?>
              <option value="<? echo $class_row['class_Id'];?>"><? echo $class_row['class_Name'];?></option>
              <?}?></select></td>
            <td width="116" ><input type="submit" name="submit2" value="Continue" />
              <input type="hidden" name="submit" value="Search Now" /></td>
            <td colspan="2"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td height="21"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td >&nbsp;</td>
            <td width="53"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="25"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><div align="right">
              <input type="hidden" name="action" value="Reg Client" />
            </div></td>
            <td align="center"><!--DWLayoutEmptyCell-->&nbsp;</td>
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