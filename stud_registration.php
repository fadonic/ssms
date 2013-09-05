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
  if (validate_required(surname,"Please Enter Surname!")==false)
  {surname.focus();return false;}
  if (validate_required(firstName,"Please Enter First Name!")==false)
  {firstName.focus();return false;}
   if (validate_required(sex,"Please Select Gender!")==false)
  {sex.focus();return false;}
  if (validate_required(uploadFile,"Please Upload Passport!")==false)
  {uploadFile.focus();return false;}
  if (validate_required(class_Id,"Please Select class!")==false)
  {class_Id.focus();return false;}
  if (validate_required(dateOfBirth,"Please Enter Date Of Birth!")==false)
  {dateOfBirth.focus();return false;}
  if (validate_required(yearOfEntry,"Please Enter year Of Entry!")==false)
  {yearOfEntry.focus();return false;}
  if (validate_required(nationality,"Please Type Nationality!")==false)
  {nationality.focus();return false;}
  if (validate_required(state,"Please Type State.!")==false)
  {state.focus();return false;}
  if (validate_required(lga,"Please Enter L.G.A.!")==false)
  {lga.focus();return false;}
  if (validate_required(address,"Please Enter Address!")==false)
  {address.focus();return false;}
  if (validate_required(mobileNo,"Please Enter Mobile No!")==false)
  {mobileNo.focus();return false;}
   if (validate_required(email,"Please Enter Email!")==false)
  {email.focus();return false;}
  if (validate_required(religion,"Please Enter Religion!")==false)
  {religion.focus();return false;}
  if (validate_required(motherTongue,"Please Enter Mother Tongue!")==false)
  {motherTongue.focus();return false;}
 }
}
</script>
<?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
   <form action="trans_registered_stud.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset><legend><strong>Student Data Registration</strong></legend>
        <table width="790" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Student Personal Data</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td width="98"  align="left" valign="middle"><strong>Surname:</strong></td>
            <td width="254"  align="left" valign="middle"><input type="text" name="surname" size="30" /></td>
            <td width="56" >&nbsp;</td>
            <td width="138"  align="left" valign="middle"><strong>First name:</strong></td>
            <td width="180"  align="left" valign="middle"><input type="text" name="firstName" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Middle name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="middleName" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Sex:</strong></td>
            <td  align="left" valign="middle"><select name="sex">
            <option value="">...Select...</option>
              <?php
          $sex = array('Female','Male');
           for ($i=0; $i<=1; $i++){ ?>
              <option><?php echo $sex[$i]; ?></option>
              <?php } ?>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Passport:</strong></td>
            <td  align="left" valign="middle"><input type="file" name="uploadFile" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Class:</strong></td>
            <td  align="left" valign="middle"><select name="class_Id">
            <option value="">...Select...</option>
              <?php
              $class_query = "select * from class order by class_Name";
              $class_result = mysql_query($class_query);
              while($class_row = mysql_fetch_array($class_result)){?>
              <option value="<? echo $class_row['class_Id'];?>"><? echo $class_row['class_Name'];?></option>
              <?}?>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Date Of Birth:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="dateOfBirth" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Year of entry:</strong></td>
            <td  align="left" valign="middle"><select name="yearOfEntry">
            <option value="">...Select...</option>
              <?php for ($i=1995; $i<=2020; $i++){ ?>
              <option><?php echo $i; ?></option>
              <?php } ?>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Nationality:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="nationality" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>State:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="state" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>LGA:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="lga" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="address" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Mobile No:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="mobileNo" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>E-mail:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="email" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Religion:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="religion" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Mother tongue:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="motherTongue" size="30" /></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Sponsor Information</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="ssurname" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="sfirstName" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Other name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="sotherName" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="saddress" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Occupation:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="soccupation" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Relationship:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="srelationship" size="30"  /></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Next of Kin Information</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="ksurname" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kfirstName" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Other name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kotherName" size="30" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kaddress" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Relationship:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="krelationship" size="30"  /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Occupation:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="koccupation" size="30" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Reg Student" /></td>
            <td align="center"><input type="submit" name="submit" value="Submit" /></td>
            <td  align="left" valign="middle"><strong>&nbsp;</strong></td>
            <td  align="left" valign="middle">&nbsp;</td>
          </tr>
        </table>
        </form>
      </fieldset>
      </div>
  
</div>
</body>
</html>
<?
//include "footer.php";
?>