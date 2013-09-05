
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" SYSTEM "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>

<title>RECEIPT OF PAYMENT</title>
<style>
INPUT {
	background-color: #FBF0DA;
}
</style>
</head>

<?
include 'dbfunctions.php';
$term_Id = $_GET['term_Id'];
$session_Id = $_GET['session_Id'];
$class_Id = $_GET['class_Id'];
$student_Id = $_GET['student_Id'] ;
//echo $session_Id;
//echo $term_Id;
//echo $class_Id;
//echo $student_Id;

$payment_query = "select * from payment where class_Id='$class_Id'
                  and term_Id='$term_Id' and session_Id='$session_Id' and student_Id='$student_Id'";
  $payment_result = mysql_query($payment_query) or die(mysql_error());
   if(mysql_affected_rows()>0){
$payment_details = mysql_fetch_array($payment_result);
$session_details = get_session_details($session_Id);
$term_details = get_term_details($term_Id) ;
$class_deatils = get_class_details($class_Id);
$student_details = get_stud_details($student_Id);
?>

<body style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px">
<form id="form1" name="form1" method="post" action="">
  <table align="center">
    <tr>
      <td valign="top"><table width="700" border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px">
        <tr>
          <td colspan="2"><fieldset style="font-family:Arial, Helvetica, sans-serif; font-size:14">
            <legend>
            <p align="right"><strong>RECEIPT OF PAYMENT</strong></p>
            </legend>
            <table width="100%">
              <tr>
                <td colspan="3" align="right">Receipt No.: <strong><? echo $payment_details['receipt_No'];?></strong></td>
              </tr>
              <tr valign="top">
                <td width="15%" height="71"><img src="images/s21.jpeg" width="145" height="127" /></td>
                <td width="54%"><div style="font-weight:bold; font-size:12">SCHOOL NAME<br />
                  BURSARY DEPARTMENT</div></td>
                <td width="31%"></td>
              </tr>
            </table>
          </fieldset></td>
        </tr>
        <tr valign="top">
          <td width="69%"></td>
          <td></td>
        </tr>
        <tr valign="top">
          <td width="69%"><strong>Received From: </strong><br />
            <br />
            <table width="100%" cellspacing="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px">
              <tr>
                <td width="31">&nbsp;</td>
                <td width="223" valign="top"><strong>STUDENT UNIQUE ID:</strong></td>
                <td width="215" valign="top"><? echo $student_details['student_No'];?></td>
              </tr>
              <tr>
                <td width="31">&nbsp;</td>
                <td width="223" valign="top"><strong>Surname:</strong></td>
                <td width="215" valign="top"><? echo strtoupper($student_details['surname']);?></td>
              </tr>
              <tr>
                <td width="31">&nbsp;</td>
                <td valign="top"><strong>Other Name(s):</strong></td>
                <td valign="top"><? echo $student_details['first_Name']." ".$student_details['middle_Name']; ?></td>
              </tr>
              <tr>
                <td width="31">&nbsp;</td>
                <td valign="top"><strong>CLASS:</strong></td>
                <td valign="top"><? echo strtoupper($class_deatils['class_Name']); ?></td>
              </tr>
              <tr>
                <td width="31">&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td width="31">&nbsp;</td>
                <td valign="top">&nbsp;</td>
                <td valign="top">&nbsp;</td>
              </tr>
            </table></td>
          <td><img src="<?php if (empty($student_details['passport'])){ echo "images/no_photo.png";}else{ echo $student_details['passport'];} ?> " alt="" width="55%" height="10%" /><br />
            <p><strong>Receipt Number: </strong><? echo " ".$payment_details['receipt_No'];?> <br />
              <strong>Payment Date: </strong> <? echo " ".$payment_details['date_Of_Payment'];?><br />
            </p></td>
        </tr>
        <tr valign="top">
          <td colspan="2"><br />
            <br />
            <table width="694" border="1" cellpadding="5" cellspacing="0">
              <tr valign="top">
                <td width="182"><strong><i>Being Payment for:</i></strong></td>
                <td width="486"><strong><? echo $term_details['term_Name']." Term".",  ". $session_details['session_Name']." Session"; ?></strong></td>
              </tr>
              <tr>
                <td><strong>Amount Paid</strong></td>
                <td><strong><? echo $payment_details['amount'];?> &nbsp;</strong></td>
              </tr>
            </table>
            <br />
            <strong>Please Protect this receipt of payment<em>: </em>Its is highly confidential.</strong></td>
        </tr>
      </table>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td height="26" align="center" valign="top"><input type="submit" name="button" id="button" value="Cancel" />
        <input type="submit" name="button2" id="button2" value="Print" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?
}
?>