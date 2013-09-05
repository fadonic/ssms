<?php
//session_start();
$connect = mysql_connect("localhost","root","admin") or die("can not connect to database");
$db = mysql_select_db("ssms", $connect);
function get_staff_info($username){
	$qry="select * from registered_staff where username='".$username."'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}
function changePass($username,$oldpass,$newpass,$userId){
	$qry1="select users_id from users where username='".$username."' and password='".$oldpass."' and users_id='".$userId."'";
	$result = mysql_query($qry1) or die('Cannot select users to change login');
	if(mysql_affected_rows()>0){
		$qry2="update users set password='".$newpass."' WHERE password='".$oldpass."' AND users_id='".$userId."'";
        mysql_query($qry2) or die('Cannot update login');

		return 4;
	}else{
		return 0;
	}
}
function get_student_info($surname){
	$qry="select * from registered_stud where surname='$surname'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}
function get_school_name(){
  $school_query = "select * from school";
  $school_result = mysql_query($school_query);
  $school_row = mysql_fetch_array($school_result);
  return $school_row[school_Name];
}
function get_school_details($school_Id){
  $school_query = "select * from school where school_Id='$school_Id'";
  $school_result = mysql_query($school_query);
  $school_row = mysql_fetch_array($school_result);
  return $school_row['school_Type'];
}
function get_class_name($classId){
  $class_query = "select * from class where class_Id='$classId'";
  $class_result = mysql_query($class_query);
  $class_row = mysql_fetch_array($class_result);
  return $class_row[class_Name];
}
function get_department_name($departmentId){
  $department_query = "select * from department where department_Id='$departmentId'";
  $department_result = mysql_query($department_query);
  $department_row = mysql_fetch_array($department_result);
  return $department_row['department_Name'];
}
function get_cur_term(){
	$qry="select * from terms where term_Status='active'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}

function get_cur_session(){
	$qry="select * from sessions where session_Status='active'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}

function get_term_details($term_Id){
	$qry="select * from terms where term_Id='$term_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}

function get_session_details($session_Id){
	$qry="select * from sessions where session_Id='$session_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}
function get_class_details($class_Id){
	$qry="select * from class where class_Id='$class_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}


function get_subject_details($subject_Id){
   $qry="select * from subject where subject_Id='$subject_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}
function get_stud_details($student_Id){
	$qry="select * from registered_stud where student_Id='$student_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
}
function get_num_stud($class_Id){
	$qry="select * from registered_stud where class_Id='$class_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $num_stud = mysql_num_rows($res);
	return $num_stud;
}
function get_stud_name($student_Id){
	$qry="select * from registered_stud where student_Id='".$student_Id."'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
    $name = $row['surname']." ".$row['first_Name']." ".$row['middle_Name'];
	return $name;
}
function execQuery($qry){
	mysql_query($qry) or die (mysql_error());
}
function updStudResult($regsubjectid,$scoretest,$scoreexam,$studentid){
    $scoretotal = $scoretest + $scoreexam;
	$qry="update subject set test_score='".$scoretest."', exam_score='".$scoreexam."',
    total_score='".$scoretotal."', student_Id='".$studentid."', has_scores='1' where subject_Id='".$regsubjectid."'";
    execQuery($qry);
}
function get_stud_scores($subject_Id){
	$qry="select * from stud_scores where subject_Id='$subject_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
 }
 function getGrade($score){
	if($score>=70) return "A";
	if(($score>=60)&&($score<=69)) return "B";
	if(($score>=50)&&($score<=59)) return "C";
	if(($score>=45)&&($score<=49)) return "D";
	if(($score>=40)&&($score<=44)) return "E";
	if($score<=39) return "F";
}

function getPoint($grad){
	if ($grad=="A") return 5;
	if ($grad=="B") return 4;
	if ($grad=="C") return 3;
	if ($grad=="D") return 2;
	if ($grad=="E") return 1;
	if ($grad=="F") return 0;
}
function getGradeLetter($grad){
	if ($grad=="5") return "A";
	if ($grad=="4") return "B";
	if ($grad=="3") return "C";
	if ($grad=="2") return "D";
	if ($grad=="1") return "E";
	if ($grad=="0") return "F";
}

function getRemark($total_score){
	if ($total_score>=70) return "Excellent";
	if ($total_score>=65 && $total_score<70) return "Very Good";
	if ($total_score>=60 && $total_score<65) return "Good";
	if ($total_score>=50 && $total_score<60) return "Credit";
	if ($total_score>=45 && $total_score<50) return "Pass";
    if ($total_score>=40 && $total_score<45) return "Pass";
	if ($total_score<40) return "Fail";
}
function get_ss_score($student_Id, $ss_id, $class_Id){
	$qry="select * from stud_scores where student_Id='".$student_Id."' and subject_Id='$ss_id' and class_Id='$class_Id'";
	$res=mysql_query($qry) or die (mysql_error());
	if (mysql_affected_rows()>0){
    $row = mysql_fetch_assoc($res);
    $score = $row['test_score'] + $row['exam_score'];
	return $score;
	}else {
		return null;
	}
}
function get_ss_grade($student_Id, $ss_id, $class_Id){
	$qry="select * from stud_scores where student_Id='".$student_Id."' and subject_Id='$ss_id' and class_Id='$class_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
    $grade = getGradeLetter($row['grade_Value']);
	return $grade;
}
function get_ss_gp($student_Id, $ss_id, $class_Id){
	$qry="select * from stud_scores where student_Id='".$student_Id."' and subject_Id='$ss_id' and class_Id='$class_Id'";
	$res=mysql_query($qry) or die (mysql_error());
	if (mysql_affected_rows() > 0){
    $row = mysql_fetch_assoc($res);
    $ss_gp = $row['grade_Value'];
	return $ss_gp;
	}else {
		return null;
	}
}
function get_ss_code($ss_id){
	$qry="select * from subject where subject_Id='".$ss_id."'";
	$res=mysql_query($qry) or die (mysql_error());
	if (mysql_affected_rows()> 0){
    $row = mysql_fetch_assoc($res);
	return $row['subject_Name'];
	}else{
		return null;
	}
}

function get_schoolfee_details($class_Id,$session_Id,$term_Id){
	$qry="select * from school_fee where class_Id='$class_Id' and term='$term_Id' and session='$session_Id'";
	$res=mysql_query($qry) or die (mysql_error());
    $row = mysql_fetch_assoc($res);
	return $row;
 }
?>