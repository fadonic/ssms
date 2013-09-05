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
  if (validate_required(subject,"Please Enter Subject!")==false)
  {subject.focus();return false;}
 }
}
</script>
<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#/209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#/209;&#241;0-9]/ig,''):null;
}
</script>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
      <form action="trans_add_subject.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset>
      <legend><strong>Add Subject For:
		<?
	$school_query1= "select * from school where school_Id='$school'";
	$school_result1 = mysql_query($school_query1);
	$school_row1 = mysql_fetch_array($school_result1);
	echo $school_row1['school_Type'];
	?>
     </strong></legend>
           <?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
        <table width="715" align="center" style="">
          <!--DWLayoutTable-->
          <tr>
            <td height="21" colspan="17" align="left" valign="middle" bgcolor="#EAEAEA" class="ruler">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="17" align="left" valign="middle" class="ruler" ><strong>(</strong> Please Enter Subject<strong>)</strong></td>
          </tr>
          <tr>
            <td height="32"  align="left" valign="middle"><strong> School: </strong></td>
            <td width="204" align="left" valign="middle"><select name="sch">
              <?
              $school_query = "select * from school where school_Id='$school'";
	          $school_result = mysql_query($school_query);
              while($row = mysql_fetch_array($school_result)){?>
              <option value="<? echo $row['school_Id'];?>"><? echo $row['school_Type'];?></option>
              <?}?>
            </select></td>
            <td height="32"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="59" height="32"  align="left" valign="middle"><strong> Subject:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="subject" size="30" /></td>
            <td width="0"></td>
          </tr>
          <tr>
            <td width="56" height="21"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="165"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="48" align="center" ><input type="hidden" name="submit" value="Search Now" />
              <input type="submit" name="submit2" value="Submit" /></td>
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