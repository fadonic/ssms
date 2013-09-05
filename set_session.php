<?php
include "dbfunctions.php";
$session_Id = $_GET['session_Id'];
$query = "update sessions set session_Status='inactive'";
$result = mysql_query($query) or die(mysql_error());
$query1 = "update sessions set session_Status='active' where session_Id='$session_Id'";
$result1 = mysql_query($query1) or die(mysql_error());
header('Location:sessions.php');
?>