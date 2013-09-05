<?php
include "header.php";
//include "dbfunctions.php";
include ('nav_bar.php');
?>
<?php
$id = $_SESSION['username'];
$staff_data = get_staff_info($_SESSION['username']);
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
  if (validate_required(firstName,"Please Type your First Name.!")==false)
  {firstName.focus();return false;}
    if (validate_required(surname,"Please Select Type your Surname!")==false)
  {surname.focus();return false;}
  if (validate_required(mobileNo,"Please Select Type your Mobile No!")==false)
  {mobileNo.focus();return false;}
 }
}
</script>
<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#/209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#/209;&#241;0-9]/ig,''):null;
}
</script>
<form action="trans_edit_registered_staff.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend><strong>Profile Settings:
       </strong> </legend>
       <?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
        <table width="700" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Staff Personal Data</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Role:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?
	$role = $staff_data['role']; 
	$role_query = "select * from access_level where access_Level='$role'";
	$role_result = mysql_query($role_query);
	$role_row = mysql_fetch_array($role_result); 
	echo $role_row['access_Name'];
	?>" name="role" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['first_Name']; ?>" name="firstName" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Middle name:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['middle_Name']; ?>" name="middleName" readonly="readonly" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['surname']; ?>" name="surname" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Title:</strong></td>
            <td  align="left" valign="middle"><select name="title">
              <option value="<?php echo $staff_data['title']; ?>"><?php echo $staff_data['title']; ?></option>
              <option value="Miss">Miss</option>
              <option value="Mr">Mr</option>
              <option value="Mrs">Mrs</option>
              <option value="Dr">Dr</option>
              <option value="Prof">Prof</option>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Sex:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['sex']; ?>" name="sex" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Date Of Birth:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['date_Of_Birth']; ?>" name="dateOfBirth" readonly="readonly" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Mobile No:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['mobile_No']; ?>" name="mobileNo" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>E-mail:</strong></td>
            <td  align="left" valign="middle"><input type="text" value="<?php echo $staff_data['email']; ?>" name="email" readonly="readonly" /></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><input type="hidden" name="id" value="<? echo $id; ?>" /></td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Update Staff" /></td>
            <td align="center"><input type="submit" name="submit" value="Update" /></td>
            <td  align="left" valign="middle"><strong>&nbsp;</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
      </fieldset>
      </div>
  
</div>
</body>
</html>