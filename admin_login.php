<?php

include_once 'database.php';
session_start();
$_SESSION['uname'] = $_REQUEST['username'];
$_SESSION['pwd'] = $_REQUEST['password'];
$query = mysqli_query($connect, "select * from admin_table where username = '".$_SESSION['uname']."' and password = '".$_SESSION['pwd']."'");
$check = mysqli_fetch_row($query);
if($check)
	require 'feedback_admin_read.php';
?>
		