<?php
include "header.php";
include "dbfunctions.php";
include("home.php");
include('nav_bar.php');
?>
<?php
   $school = trim($_POST['school']);
  // echo $school;
?>
<form action="trans_add_subject.php" method="post" enctype="multipart/form-data">
  <table width="537" align="center" style="border: 1px solid #d5dfec;">
    <!--DWLayoutTable-->
    <tr>
      <td height="32" colspan="17" align="left" valign="middle" bgcolor="#EAEAEA" class="ruler"><h2>Add Subject For:
      <? 
	$school_query = "select * from school where school_Id='$school'";
	$school_result = mysql_query($school_query);
	//$school_row = mysql_fetch_array($school_result);
	//echo $school_row['school_Type'];
	?></h2></td>
    </tr>
    <tr>
      <td colspan="17" align="left" valign="middle" class="ruler" ><strong>(</strong> Please Enter Subject<strong>)</strong></td>
    </tr>
    <tr>
      <td height="32"  align="left" valign="middle"><strong> School:	</strong>
      </td>
      <td width="204" align="left" valign="middle"><select name="sch">
        <? while($school_row = mysql_fetch_array($school_result)){?>
        <option value="<? echo $school_row['school_Id'];?>"><? echo $school_row['school_Type'];?></option>
        <?}?>
      </select></td>
      <td height="32"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="59" height="32"  align="left" valign="middle"><strong> Subject:</strong></td>
      <td  align="left" valign="middle"><input type="text" name="subject" size="30" /></td><td width="0"></td>
    </tr>
    <tr>
      <td width="56" height="21"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="165"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="48" align="center" ><input type="hidden" name="submit" value="Search Now" />      
      <input type="submit" name="submit2" value="Save" /></td>
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
</form> 
<?php
include "footer.php";
?>