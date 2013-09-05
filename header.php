<?
session_start();
include "dbfunctions.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>School Management System</title>

<link href="000000001.css" rel="stylesheet" type="text/css" />
<link href="000000003.css" rel="stylesheet" type="text/css" />
</head>

<body onLoad="show_clock()">
<div class="header-container">
  <div class="welcome">
  <div class="user"><? include 'home.php';?><? echo date('l jS \of F Y'); ?><br /><script language="javascript" src="liveclock.js"></script></div>
  <div class="logo"><img src="images/s21.jpeg" alt="" width="122" height="122" /></div>
  </div>
</div>
