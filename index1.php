<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SSMS</title>
<style type="text/css">
.text {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.logintb {
	border-top-width: 2px;
	border-right-width: 2px;
	border-bottom-width: 2px;
	border-left-width: 2px;
	border-top-style: dotted;
	border-bottom-style: dotted;
	border-top-color: #D5D5D5;
	border-right-color: #D5D5D5;
	border-bottom-color: #D5D5D5;
	border-left-color: #D5D5D5;
}
.footer {
	background-color: #2D2D2D;
	border: 1px solid #030303;
	text-align: left;
	line-height: 27px;
	font-family: Arial, Helvetica, sans-serif;
	color: #EAEAEA;
	font-size: 11px;
}
</style>
</head>

<body>
<FORM id=form1 name=form1 action=login.php method=post> 
<table width="64%" height="508">
  <tr>
    <td height="206" colspan="2"><img src="images/headerlogo.png" width="759" height="215" /></td>
  </tr>
  <tr class="text">
    <td width="90%" height="134" valign="top"><p>Instructions for administrator or management. this software is develop to enhance examination, registration and student ID card processing. It highly secure and must be properly maintain in other to full utilize the features. we recommend you make instant contact on us incase of any problems. our custom care line is always available should you need to speak with any of our help desk agent.<br />
        <strong>Security Note</strong>:<br />
Please ensure y ou always log out when ever you finish navigatating through t his software.Your user account most be higly protected. to avoid any data compromise.</p>
      <p></p>
    <p>&nbsp;</p></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr class="text">
    <td height="77" colspan="2" valign="top" bgcolor="#FFFFFF"><fieldset><legend><strong>Administrative Login</strong></legend><table width="683" class="logintb">
      <tr>
        <td colspan="3"><strong>Administrative Login.</strong></td>
      </tr>
       <tr>
    <td colspan="2"><?php if(isset($_GET['loginFail'])){ echo "<font color=red>".$_GET['loginFail']."</font>"; }?></td>
    <td width="253" rowspan="3">&nbsp;</td>
  </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="75">User Name:</td>
        <td colspan="2"><label for="textfield"></label>
          <input type="username" name="username" id="username" /></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td width="187"><input type="password" name="password" id="password" /></td>
        <td width="399">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
      </tr>
    </table></td>
  </tr>
  <tr class="text">
    <td height="42" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table></fieldset>
<table width="766" height="51" class="footer">
  <tr>
    <td>Copyright 2013 School Management. All Rights Reserved.</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>