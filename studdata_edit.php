<?php
include "header.php";
include('nav_bar.php');
?>
      <?php
$id = $_GET['student_id'];
$o_query = "select * from registered_stud where student_Id = '$id'";
$o_result = mysql_query($o_query);
$student_info = mysql_fetch_array($o_result) ;
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
  if (validate_required(surname,"Please Select Surname!")==false)
  {surname.focus();return false;}
  if (validate_required(firstName,"Please Select First Name!")==false)
  {firstName.focus();return false;}
  if (validate_required(dateOfBirth,"Please Enter Date Of Birth!")==false)
  {dateOfBirth.focus();return false;}
  if (validate_required(yearOfEntry,"Please Enter year Of Entry!")==false)
  {dateOfBirth.focus();return false;}
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
<script type="text/JavaScript">
function valid(f) {
!(/^[A-z&#/209;&#241;0-9]*$/i).test(f.value)?f.value = f.value.replace(/[^A-z&#/209;&#241;0-9]/ig,''):null;
}
</script>
      <form action="trans_edit_registered_stud.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
      <fieldset>
        <legend><strong>Student Profile Modification:
      </strong> </legend>
            <?php
if (isset($_GET['error']) && $_GET['error'] != "") {
echo '<div id="error">'.$_GET['error'] .'</div>';
}
?>
        <table width="750" align="center" style="border: 1px solid #d5dfec;">
          <!--DWLayoutTable-->
          <tr bgcolor="#EAEAEA">
            <td colspan="18" align="left" valign="middle" class="ruler"><h2>Student Personal Data</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td width="88"  align="left" valign="middle">&nbsp;</td>
            <td width="210"  align="left" valign="middle">&nbsp;</td>
            <td width="66" >&nbsp;</td>
            <td width="99"  align="left" valign="middle">&nbsp;</td>
            <td width="258"  align="left" valign="middle"><img src="<?php if (!isset($student_info['passport'])){ echo "images/no_photo.png";}else{ echo $student_info['passport'];} ?> " alt="" width="55%" height="10%" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="surname" size="30"  value="<?php echo  $student_info['surname']; ?>" readonly="readonly"/></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="firstName" size="30"  value="<?php echo $student_info['first_Name']; ?>" readonly="readonly"/></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Middle name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="middleName" size="30" value="<?php echo $student_info['middle_Name']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Sex:</strong></td>
            <td  align="left" valign="middle"><select name="sex">
              <option><?php echo $student_info['sex']; ?></option>
             <option><?php
             if($student_info['sex']=='Female')
              echo 'Male';
              else
              echo 'Female'
              ?></option>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle">&nbsp;</td>
            <td  align="left" valign="middle">&nbsp;</td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Class</strong></td>
            <td  align="left" valign="middle"><select name="class_Id">
              <option value="<?
              $class_query = "select * from class where class_Id='$student_info[class_Id]'" ;
              $class_result=mysql_query($class_query) ;
              $row = mysql_fetch_array($class_result);
              echo $row['class_Id'];
              ?>"><?php
               echo $row['class_Name']; ?></option>
               <?php
               $c_query = "select * from class where class_Id!='$student_info[class_Id]' order by class_Id" ;
               $c_result = mysql_query($c_query);
               while($cr=mysql_fetch_assoc($c_result)){
               ?>
               <option value="<? echo $cr['class_Id']?>"><?php echo $cr['class_Name']; ?></option>
               <?php
               }
               ?>
            </select></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Date of Birth:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="dateOfBirth" size="30" value="<?php echo $student_info['date_Of_Birth']; ?>" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Year of entry:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="yearOfEntry" size="30" value="<?php echo $student_info['year_Of_Entry']; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Nationality:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="nationality" size="30" value="<?php echo $student_info['nationality']; ?>" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>State:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="state" size="30" value="<?php echo $student_info['state']; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>LGA:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="lga" size="30" value="<?php echo $student_info['lga']; ?>" readonly="readonly" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="address" size="30" value="<?php echo $student_info['address']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Mobile No.:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="mobileNo" size="30" value="<?php echo $student_info['mobile_No']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Email:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="email" size="30" value="<?php echo $student_info['email']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Religion:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="religion" size="30" value="<?php echo $student_info['religion']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Mother tongue:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="motherTongue" size="30" value="<?php echo $student_info['mother_Tongue']; ?>" readonly="readonly" /></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Sponsor Information</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="ssurname" size="30"  value="<?php echo $student_info['ssurname']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="sfirstName" size="30"  value="<?php echo $student_info['sfirst_Name']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Other name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="sotherName" size="30"  value="<?php echo $student_info['sother_Name']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="saddress" size="30" value="<?php echo $student_info['saddress']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Occupation:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="soccupation" size="30" value="<?php echo $student_info['soccupation']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Relationship:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="srelationship" size="30" value="<?php echo $student_info['srelationship']; ?>" /></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Next of Kin Information</h2></td>
          </tr>
          <tr>
            <td colspan="18" align="left" valign="middle" class="ruler" >&nbsp;</td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Surname:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="ksurname" size="30" value="<?php echo $student_info['ksurname']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>First name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kfirstName" size="30"  value="<?php echo $student_info['kfirst_Name']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Other name:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kotherName" size="30" value="<?php echo $student_info['kother_Name']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Address:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="kaddress" size="30" value="<?php echo $student_info['kaddress']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><strong>Relationship:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="krelationship" size="30" value="<?php echo $student_info['krelationship']; ?>" /></td>
            <td >&nbsp;</td>
            <td  align="left" valign="middle"><strong>Occupation:</strong></td>
            <td  align="left" valign="middle"><input type="text" name="koccupation" size="30" value="<?php echo $student_info['koccupation']; ?>" /></td>
          </tr>
          <tr>
            <td  align="left" valign="middle"><input type="hidden" name="id" value="<? echo $id; ?>" /></td>
            <td  align="left" valign="middle"><input type="hidden" name="action" value="Update Student" /></td>
            <td align="center"><input type="submit" name="submit" value="Update" /></td>
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