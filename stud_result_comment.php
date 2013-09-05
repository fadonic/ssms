<?php
//include "dbfunctions.php";
include "header.php";
include('nav_bar.php');
?>
<?php
$term_Id = $_GET['term_Id'];
$session_Id = $_GET['session_Id'];
$class_Id = $_GET['class_Id'];
$student_Id = $_GET['student_Id'];
$studname = get_stud_name($student_Id);
$class = get_class_details($class_Id);
$term = get_term_details($term_Id);
$session = get_session_details($session_Id);
$studdetails = get_stud_details($student_Id);
?>
<form action="result_sheet.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
 <fieldset>
 <legend><strong>Entering Results Comment</strong></legend>
      <table width="747" align="center" style="border: 1px solid #d5dfec;">
        <!--DWLayoutTable-->
        <tr>
          <td colspan="6" align="left" valign="middle" class="ruler" bgcolor="#dddddd"><h2>Character Dev,  Practical Skill &amp; Others</h2></td>
        </tr>
        <tr>
          <td width="227" height="33" align="left" valign="middle" class="ruler"><strong>Name:</strong><? echo "&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($studname);?></td>
          <td width="179" align="left" valign="middle" class="ruler"><strong>Student ID:</strong><? echo "&nbsp;&nbsp;&nbsp;&nbsp;". $studdetails['student_No'];?></td>
          <td colspan="4" align="left" valign="middle" class="ruler"><strong>Current Class:</strong><? echo "&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($class['class_Name']);?></td>
        </tr>
        <tr>
          <td height="1" align="left" valign="middle" class="ruler"><strong>Attendance:</strong></td>
          <td width="179" align="left" valign="middle" class="ruler"><label for="textfield"></label>
          <input type="text" name="attendance_value" id="textfield" /></td>
          <td colspan="2" align="left" valign="middle" class="ruler"><strong>No. of Absents.:</strong></td>
          <td align="left" valign="middle" class="ruler"><input type="text" name="no_of_absent" id="textfield2" />            <label for="textfield2"></label></td>
          <td width="7" rowspan="2" align="left" valign="middle" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td height="2" align="left" valign="middle" class="ruler"><strong>No of times school open:</strong></td>
          <td width="179" align="left" valign="middle" class="ruler"><input type="text" name="no_time_schoolopen" id="textfield3" /></td>
          <td colspan="2" align="left" valign="middle" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td align="left" valign="middle" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td height="29" align="left" valign="middle" bgcolor="#F4F4F4" class="ruler"><strong>Character Development</strong></td>
          <td width="179" align="left" valign="middle" bgcolor="#F4F4F4" class="ruler">&nbsp;</td>
          <td colspan="4" align="left" valign="middle" bgcolor="#F4F4F4" class="ruler"><strong>Practical Skills</strong></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Attendance:</strong></td>
          <td  align="left" valign="middle"><select name="attendance">
<option value="">..Select</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Handwriting</strong></td>
          <td width="144"  align="left" valign="middle"><select name="handwriting">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Attentiveness:</strong></td>
          <td  align="left" valign="middle"><select name="attentiveness">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Music</strong></td>
          <td  align="left" valign="middle"><select name="music">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Neatness:</strong></td>
          <td  align="left" valign="middle"><select name="neatness">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Drama</strong></td>
          <td  align="left" valign="middle"><select name="drama">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Politeness:</strong></td>
          <td  align="left" valign="middle"><select name="politeness">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Sport</strong></td>
          <td  align="left" valign="middle"><select name="sport">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Self Control:</strong></td>
          <td  align="left" valign="middle"><select name="selfcontrol">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Crafts</strong></td>
          <td  align="left" valign="middle"><select name="crafts">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Punctuality:</strong></td>
          <td  align="left" valign="middle"><select name="punctuality">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Clubs/Societies</strong></td>
          <td  align="left" valign="middle"><select name="clubs">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Relationship with Others:</strong></td>
          <td  align="left" valign="middle"><select name="relationship">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
          <td colspan="2" ><strong>Hobbies</strong></td>
          <td  align="left" valign="middle"><select name="hobbies">
            <option value="">..Select</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select></td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><input type="hidden" name="student_Id" value="<? echo $student_Id;?>" />
          <input type="hidden" name="class_Id" value="<? echo $class_Id;?>" />
          <input type="hidden" name="term_Id" value="<? echo $term_Id?>" />
          <input type="hidden" name="session_Id" value="<? echo $session_Id;?>" />
          <input type="hidden" name="action6" value="Browse Course Reg" />
          <input type="hidden" name="action7" value="Browse Course Reg" /></td>
          <td width="65" >&nbsp;</td>
          <td width="97"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle">&nbsp;</td>
          <td  align="left" valign="middle"><input type="hidden" name="action" value="Browse Course Reg" />
            <? echo "<a href=javascript:history.back();><input type=\"button\" name=\"button\" id=\"button\" value=\"Cancel\" /></a>"; ?>
          <input type="submit" name="submit" value="Continue" /></td>
          <td align="center"><!--DWLayoutEmptyCell-->&nbsp;</td>
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