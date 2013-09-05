<?php
include "dbfunctions.php";
$term_Id = $_GET['term_Id'];
$query = "update terms set term_Status='inactive'";
$result = mysql_query($query) or die(mysql_error());
$query1 = "update terms set term_Status='active' where term_Id='$term_Id'";
$result1 = mysql_query($query1) or die(mysql_error());
header('Location:terms.php');
?>