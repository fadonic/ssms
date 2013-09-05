<?php
include "header.php";
include('nav_bar.php');
$access_query = "select * from access_level order by access_Level";
$access_result = mysql_query($access_query);
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
  if (validate_required(firstName,"Please Enter First Name.!")==false)
  {firstName.focus();return false;}
  if (validate_required(surname,"Please Enter Surname!")==false)
  {surname.focus();return false;}
  if (validate_required(title,"Please Select Title!")==false)
  {title.focus();return false;}
  if (validate_required(sex,"Please Select Sex!")==false)
  {sex.focus();return false;}
  if (validate_required(dateOfBirth,"Please Enter Date Of Birth!")==false)
  {dateOfBirth.focus();return false;}
  if (validate_required(mobileNo,"Please Enter Mobile No!")==false)
  {mobileNo.focus();return false;}
  if (validate_required(email,"Please Enter Email!")==false)
  {email.focus();return false;}
 }
}
</script>
<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#/209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#/209;&#241;0-9]/ig,''):null;
}
</script>
      <form action="trans_registered_staff.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset><legend><strong>Staff Personal Data</strong></legend>
      <?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
        <table width="700" align="center">
          <!--DWLayoutTable-->
          <tr>
            <td height="26" colspan="18" align="left" valign="middle" bgcolor="#F5F5F5" class="ruler"></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">Role:</td>
            <td  align="left" valign="middle"><select name="role">
              <? while($access_row = mysql_fetch_array($access_result)){?>
              <option value="<? echo $access_row['access_Level'];?>"><? echo $access_row['access_Name'];?></option>
              <?}?>
            </select></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle">First name:</td>
            <td  align="left" valign="middle"><input type="text" name="firstName" size="30"  /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">Middle name:</td>
            <td  align="left" valign="middle"><input type="text" name="middleName" size="30"  /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">Surname:</td>
            <td  align="left" valign="middle"><input type="text" name="surname" size="30"  /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">Title:</td>
            <td  align="left" valign="middle"><select name="title">
            <option value="">...Select...</option>
              <option value="Miss">Miss</option>
              <option value="Mr">Mr</option>
              <option value="Mrs">Mrs</option>
              <option value="Dr">Dr</option>
              <option value="Prof">Prof</option>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">Sex:</td>
            <td  align="left" valign="middle"><select name="sex">
            <option value="">...Select...</option>
              <?php
                                          $sex = array('Female','Male');
                                           for ($i=0; $i<=1; $i++){ ?>
              <option><?php echo $sex[$i]; ?></option>
              <?php } ?>
            </select></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">Date Of Birth:</td>
            <td  align="left" valign="middle"><input type="text" name="dateOfBirth" size="30" value="(dd-mm-yyyy)" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">Mobile No:</td>
            <td  align="left" valign="middle"><input type="text" name="mobileNo" size="30"  /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle">E-mail:</td>
            <td  align="left" valign="middle"><input type="text" name="email" size="30"  /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Reg Staff" /></td>
            <td align="center"><input type="submit" name="submit" value="Submit" /></td>
            <td  align="left" valign="middle"><strong>&nbsp;</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
        </fieldset>
        </form>
      </div>
  
</div>
</body>
</html>
<?
include "footer.php";
?>