<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SSMS</title>
<link href="indexstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.logintb {
	border-top-width: 2px;
	border-right-width: 2px;
	border-left-width: 2px;
	border-top-style: dotted;
	border-top-color: #D5D5D5;
	border-right-color: #D5D5D5;
	border-bottom-color: #D5D5D5;
	border-left-color: #D5D5D5;
}
</style>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<div class="header-container">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="131" height="177" class="flashimg" id="FlashID">
    <param name="movie" value="images/flashM1.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="8.0.35.0" />
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="images/flashM1.swf" width="131" height="177">
      <!--<![endif]-->
      <param name="quality" value="high" />
      <param name="wmode" value="opaque" />
      <param name="swfversion" value="8.0.35.0" />
      <param name="expressinstall" value="Scripts/expressInstall.swf" />
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
      </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div>
<div class="body-container">
<div class="body-container_s1" id="div1"><strong><font color="#660000">Welcome Note:</font><br /></strong> Instructions for administrator or management. this software is develop to enhance examination, registration and student ID card processing. It highly secure and must be properly maintain in other to full utilize the features. we recommend you make instant contact on us incase of any problems. our custom care line is always available should you need to speak with any of our help desk agent.<br />
  <font color="#660000">Security  Note:</font><br />
  </strong>
Please ensure y ou always log out when ever you finish navigatating through this software.Your user account most be higly protected. to avoid any data compromise.</div>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="760" class="logintb">
    <tr>
      <td height="27" colspan="3"><strong>Login.</strong></td>
    </tr>
    <tr>
      <td colspan="2"><strong><?php if(isset($_GET['loginFail'])){ echo "<font color=red>".$_GET['loginFail']."</font>"; }?></strong></td>
      <td width="253" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="79">User Name:</td>
      <td><label for="textfield"></label>
        <input type="text" name="username" id="textfield" /></td>
    </tr>
    <tr>
      <td height="57" valign="top">Password:</td>
      <td width="451"><p>
        <input type="text" name="password" id="textfield2" />
      </p>
        <p>
          <input type="submit" name="button" id="button" value="Submit" />
        </p></td>
    </tr>
    <tr>
      <td height="71">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
<div class="footer">Copyright 2013 Council. All Rights Reserved.</div>
</div>
<p>&nbsp;</p>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>