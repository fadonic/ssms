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
  if (validate_required(amount,"Please Enter Amount!")==false)
  {amount.focus();return false;}
  {
  if (validate_required(receiptNo,"Please Enter Receipt No!")==false)
  {receiptNo.focus();return false;}
 }
}
}
</script>
<?php
$class_Id = trim($_GET['class_Id']);
$term_Id = trim($_GET['term']);
$session_Id = trim($_GET['session']);
$student_Id = $_GET['student_Id'];
$session = get_session_details($session_Id);
$term = get_term_details($term_Id);
$stud_name = get_stud_name($student_Id) ;
$fee_details = get_schoolfee_details($class_Id,$session_Id,$term_Id);
?>
<form action="trans_payment.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
<fieldset>
  <legend><strong>Student School_Fee Payment:
       </strong> </legend>
       <?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
  <table width="75%" align="center">
    <tr>
      <td height="27" colspan="5" bgcolor="#F6F6F6"><strong>Payment Form</strong></td>
    </tr>
    <tr>
      <td height="29"><strong>Student Name:</strong></td>
      <td><? echo $stud_name; ?></td>
      <td width="16%"><strong>Payment for :</strong></td>
      <td width="13%"><? echo $term['term_Name'];?> Term</td>
      <td width="24%"><? echo $session['session_Name']?> Session</td>
    </tr>
    <tr>
      <td width="22%" height="40"><strong>Amount:</strong></td>
      <td width="25%"><label for="textfield"></label>
      <input type="text" name="amount" id="textfield" size="30" /></td>
      <td><strong>Date of Payment:</strong></td>
      <td colspan="2"><label for="textfield3"></label>
      <input type="text" name="dateOfPayment" id="textfield3" size="30" /></td>
    </tr>
    <tr>
      <td height="35"><strong>Receipt No.:</strong></td>
      <td><label for="textfield2">
        <input type="text" name="receiptNo" id="textfield4"  size="30"/>
      </label></td>
      <td>&nbsp;</td>
      <td colspan="2"><label for="textfield4"></label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="term_Id" id="hiddenField" value="<? echo $term_Id; ?>" />
      <input type="hidden" name="session_Id" id="hiddenField2" value="<? echo $session_Id; ?>"/>
      <input type="hidden" name="class_Id" id="hiddenField3" value="<? echo $class_Id; ?>" />
      <input type="hidden" name="student_Id" id="hiddenField4" value="<? echo $student_Id; ?>"/>
      <input type="hidden" name="requiredAmount" id="hiddenField4" value="<? echo $fee_details['amount'] ; ?>"/>
      </td>
      <td><input type="submit" name="button" id="button" value="Make Payment" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form> 
<?php
//include "footer.php";
?>