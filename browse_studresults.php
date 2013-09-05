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
      <form action="trans_browse_studresults.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset>
        <legend><strong>Viewing Registered Students:
      </strong> </legend>
        <table width="650" align="center" style="">
          <!--DWLayoutTable-->
          <tr>
            <td height="21" colspan="17" align="left" valign="middle" bgcolor="#EAEAEA" class="ruler">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="17" align="left" valign="middle" class="ruler" ><strong>(</strong> Please Select Class<strong>)</strong></td>
          </tr>
          <tr>
            <td height="32"  align="left" valign="middle"><strong> Students Class: </strong></td>
            <td width="83" align="left" valign="middle"><select name="class_Id">
            <option value="">.....Select.....</option>
              <?
              $class_query = "select * from class order by class_Id";
	          $class_result = mysql_query($class_query);
              while($row = mysql_fetch_array($class_result)){?>
              <option value="<? echo $row['class_Id'];?>"><? echo $row['class_Name'];?></option>
              <?}?>
            </select></td>
            <td height="32"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="59" height="32"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="0"></td>
          </tr>
          <tr>
            <td width="138" height="21"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="83"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="48" align="center" ><input type="hidden" name="submit" value="Search Now" />
              <input type="submit" name="submit2" value="Continue" /></td>
            <td width="59"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="181"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><div align="right">
              <input type="hidden" name="action" value="Reg Client" />
            </div></td>
            <td align="center"><strong>&nbsp;</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
      </fieldset>
      </form>
      </div>
  
</div>
</body>
</html>