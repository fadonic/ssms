<?php
include "header.php";
include('nav_bar.php');
?>
<form name="usrmgt" action="" method="post">
<fieldset>
        <legend><strong>User Management:
      </strong> </legend>
      <?php
if (isset($HTTP_POST_VARS['submit'])){
	$uname=strip_tags($HTTP_POST_VARS['uname']);
	$oldsword=strip_tags($HTTP_POST_VARS['oldsword']);
	$newsword=strip_tags($HTTP_POST_VARS['newsword']);
	$confirmsword=strip_tags($HTTP_POST_VARS['confirmsword']);

	if(($uname!="")&&($oldsword!="")&&($newsword!="")&&($confirmsword!="")&&($newsword==$confirmsword)){
		if(changePass($uname,$oldsword,$newsword, $userId)){
			echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
			<TBODY>
			<TR>
			<TH><font color=\"#FF0000\">password changed!</font></TD></TR></TABLE>";
			echo "<p></p>";
		}else{
			echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
			<TBODY>
			<TR>
			<TH><font color=\"#FF0000\">specified details does not represent the current user</font></TD></TR></TABLE>";
			echo "<p></p>";
		}
	}else{
		echo "<TABLE class=LowMatch style=MARGIN-TOP: 10px cellSpacing=1 align=center>
		<TBODY>
		<TR>
		<TH><font color=\"#FF0000\">invalid entry</font></TD></TR></TABLE>";
		echo "<p></p>";
	}
}

?>
 <table width="754" align="center" style="border: 1px solid #d5dfec;">
 <tr>
    <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>User Management (Change Password)</h2></td>
  </tr>
  <tr>
    <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
  </tr>
 <tr>
    <td width="124"  align="left" valign="middle"><strong>Username:</strong> </td>
    <td width="210"  align="left" valign="middle"><input type="text" name="uname" size="30"  /></td>
    <td width="63" >&nbsp;</td>
    <td width="124"  align="left" valign="middle"><strong>Old Password:</strong> </td>
    <td width="209"  align="left" valign="middle"><input type="password" name="oldsword" size="30"  /></td>
  </tr>
  <tr>
    <td  align="left" valign="middle"><strong>New Password:</strong> </td>
    <td  align="left" valign="middle"><input type="password" name="newsword" size="30"  /></td>
    <td >&nbsp;</td>
   <td  align="left" valign="middle"><strong>New Password:</strong><br>Confirm </td>
    <td  align="left" valign="middle"><input type="password" name="confirmsword" size="30"  /></td>
 </tr>
 <tr>
    <td  align="left" valign="middle">&nbsp;</td>
    <td  align="left" valign="middle">&nbsp;</td>
    <td align="center"><input type="submit" name="submit" value="submit"></td>
    <td  align="left" valign="middle">&nbsp;</td>
    <td  align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
</form>
</fieldset>


