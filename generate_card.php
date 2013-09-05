<?php
//include "header.php";
include('dbfunctions.php');
?>
<?php	 
$student_Id = $_GET['student_Id'];
$student_details = get_stud_details($student_Id);
$class_Id = $student_details['class_Id'];
$class_details = get_class_details($class_Id);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.label {
	font-family: Arial, Helvetica, sans-serif;
	height: 30px;
	line-height: 30px;
	background-color: #633;
	font-weight: bold;
	color: #CCC;
	border-radius:15px
}
.mainCard {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
	border-top-color: #693;
	border-right-color: #693;
	border-bottom-color: #693;
	border-left-color: #693;
	border-bottom-left-radius: 10px;
	border-top-right-radius: 10px;
	font-family: Arial, Helvetica, "sans-serif;";
	font-size: 12px;
}
.line {
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-top-style: solid;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #292929;
}
</style>
</head>

<body>
<table width="30%" height="240" align="center" class="mainCard">
  <!--DWLayoutTable-->
  <tr>
    <td height="21" colspan="16" align="left" valign="middle" bgcolor="#F5F5F5" class="ruler"></td>
  </tr>
  <tr>
    <td width="96" rowspan="2"  align="left" valign="middle"><img src="images/imgbatch.png" width="108" height="97"></td>
    <td height="36" colspan="2"  align="center" valign="middle" bgcolor="#FFFFCC"><strong>Custom Secondary School,  P.M.B 35467.  Akure,   Ondo State</strong>.</td>
  </tr>
  <tr>
    <td height="56" colspan="2"  align="center" valign="middle"><div class="label">STUDENT IDENTITY CARD</div></td>
  </tr>
  <tr>
    <td rowspan="4"  align="left" valign="middle"><img src="<?php if (empty($student_details['passport'])){ echo "images/no_photo.png";}else{ echo $student_details['passport'];} ?> " alt="" width="80" height="80" /></td>
    <td width="139"  align="left" valign="middle"><strong>Student Name:</strong></td>
    <td width="131"  align="left" valign="middle"><?php echo $student_details['surname']." ".$student_details['first_Name']." ".$student_details['middle_Name']; ?>&nbsp;</td>
  </tr>
  <tr>
    <td  align="left" valign="middle"><strong>Designation:</strong></td>
    <td  align="left" valign="middle">STUDENT</td>
  </tr>
  <tr>
    <td height="18"  align="left" valign="middle"><strong>Admission Number:</strong></td>
    <td  align="left" valign="middle"><? echo $student_details['student_No'];?></td>
  </tr>
  <tr>
    <td height="17"  align="left" valign="middle"><strong>Class</strong></td>
    <td  align="left" valign="middle"><? echo $class_details['class_Name'];?></td>
  </tr>
  <tr>
    <td height="21" colspan="3"  align="left" valign="middle" bgcolor="#EBEBEB"><input type="hidden" name="action" value="Reg Staff" />      <strong>&nbsp;</strong></td>
  </tr>
</table>
<div class="line">Seperator|<a href="javascript:history.back()">Back</a>|<a href="javascript:window.print() ">Print</a></div>
<table width="30%" height="240" align="center" class="mainCard">
  <!--DWLayoutTable-->
  <tr>
    <td width="270" height="21" colspan="14" align="left" valign="middle" bgcolor="#F5F5F5" class="ruler"></td>
  </tr>
  <tr>
    <td height="36"  align="left" valign="middle" bgcolor="#FFFFCC"><div align="center"><strong>Custom Secondary School  Akure,   Ondo State</strong>.</div></td>
  </tr>
  <tr>
    <td height="56"  align="left" valign="middle">This Property belongs to Custom Secondary School, Akure Ondo State. Please if found kindly return it to Office of the Principal, Custom Secondary School.</td>
  </tr>
  <tr>
    <td height="21"  align="left" valign="middle" bgcolor="#EBEBEB"><div align="center">
      <input type="hidden" name="action2" value="Reg Staff" />
      <strong>&nbsp;<em>Principal's Signature &amp; Date</em></strong></div></td>
  </tr>
  <tr>
    <td height="21"  align="left" valign="middle" bgcolor="#EBEBEB"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
</body>
</html>