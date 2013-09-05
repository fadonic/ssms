<?php
include "dbfunctions.php";
	$query = "SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
	$result = mysql_query($query) or die("Error ".mysql_errno().": ".mysql_error()."<br><br>$query");
	if(mysql_num_rows($result) == 1) {
		$row = mysql_fetch_assoc($result);
		session_start();		
		$_SESSION['authentication'] = 'ok';
		$_SESSION['access_level'] = $row['access_Level'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['users_id'] = $row['users_id'];
		header("Location:main.php?".strip_tags(SID));
		exit();
	}else {
		$loginFail = "Invalid Login! Try Again";
		header("Location:index.php?loginFail=$loginFail");
	}
?>

