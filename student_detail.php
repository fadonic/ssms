<?php
//include "dbfunctions.php";
include "header.php";
include('nav_bar.php');
?>
<?php
$student_Id = $_GET['student_Id'];
$studname = get_stud_name($student_Id);
$studdetails = get_stud_details($student_Id);
$class = get_class_details($studdetails['class_Id']);
?>
<form action="result_sheet.php" method="post" enctype="multipart/form-data" onsubmit="return validate_form(this)">
 <fieldset>
 <legend><strong>Student Information</strong></legend>
 <table width="624" align="center" style="border: 1px solid #d5dfec; border-radius:7px">
      <!--DWLayoutTable-->
      <tr>
          <td colspan="6" align="left" valign="middle" class="ruler" bgcolor="#F4F4F4"><h2>Personal Information</h2></td>
      </tr>
        <tr>
          <td width="114" height="27" align="left" valign="middle" class="ruler"><strong>Name:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studname;?></td>
          <td colspan="3" rowspan="11" align="left" valign="top" class="ruler"><img src="uploads/1376100150.jpg" width="121" height="131" /></td>
      </tr>
        <tr>
          <td height="1" align="left" valign="middle" class="ruler"><strong>Student ID:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><label for="textfield"><? echo $studdetails['student_No'];?></label></td>
        </tr>
        <tr>
          <td height="-1" align="left" valign="middle" class="ruler"><strong>Current Class:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $class['class_Name'];?></td>
        </tr>
        <tr>
          <td height="-1" align="left" valign="middle" class="ruler"><strong>Year of Entry:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['year_Of_Entry'];?></td>
        </tr>
        <tr>
          <td height="-1" align="left" valign="middle" class="ruler"><strong>Date of Birth:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['date_Of_Birth'];?></td>
        </tr>
        <tr>
          <td height="-1" align="left" valign="middle" class="ruler"><strong>Nationality:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['nationality'];?></td>
        </tr>
        <tr>
          <td height="-2" align="left" valign="middle" class="ruler"><strong>State:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['state'];?></td>
        </tr>
        <tr>
          <td height="-2" align="left" valign="middle" class="ruler"><strong>LGA:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['lga'];?></td>
        </tr>
        <tr>
          <td height="-2" align="left" valign="middle" class="ruler"><strong>Current Address:</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['address'];?></td>
        </tr>
        <tr>
          <td height="-2" align="left" valign="middle" class="ruler"><strong>Religion</strong></td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><? echo $studdetails['religion'];?></td>
        </tr>
        <tr>
          <td height="-2" align="left" valign="middle" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td width="334" colspan="2" align="left" valign="middle" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td height="29" colspan="3" align="left" valign="middle" bgcolor="#F4F4F4" class="ruler"><strong>Sponsor Information</strong></td>
          <td colspan="3" align="left" valign="middle" bgcolor="#F4F4F4" class="ruler"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Name:</strong></td>
          <td colspan="2"  align="left" valign="middle"><? echo $studdetails['ssurname']." ".$studdetails['ssurname']." ".$studdetails['sfirst_Name'];?></td>
          <td width="45" ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td width="111"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Address:</strong></td>
          <td colspan="2"  align="left" valign="middle"><? echo $studdetails['saddress'];?></td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Mobile No:</strong></td>
          <td colspan="2"  align="left" valign="middle"><? echo '08078688778';?></td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Occupation:</strong></td>
          <td colspan="2"  align="left" valign="middle"><? echo $studdetails['soccupation'];?></td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><strong>Relationship:</strong></td>
          <td colspan="2"  align="left" valign="middle"><? echo $studdetails['srelationship'];?></td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td colspan="2"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td colspan="2"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td ><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td colspan="2"  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td >&nbsp;</td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
        </tr>
        <tr>
          <td  align="left" valign="middle">&nbsp;</td>
          <td  align="left" valign="middle"><div align="center"><? echo "<a href=javascript:history.back();><input type=\"button\" name=\"button\" id=\"button\" value=\"Cancel\" /></a>"; ?>
            <? echo "<a href=javascript:window.print();><input type=\"button\"  value=\"e-Print\" /></a>"; ?>
          </div></td>
          <td  align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td align="center"><strong>&nbsp;</strong></td>
          <td  align="left" valign="middle">&nbsp;</td>
        </tr>
    </table>
      </fieldset>
      </form>
      </div>
  
</div>
</body>
</html>