<?php
$servername = 'localhost';
$usernam = 'root';
$password = '';
$db_name = 'feedback_db';
$connect = mysqli_connect($servername, $usernam, $password, $db_name);

if(!$connect)
{
	die("Connection failed: ".mysqli_connect_error());
}

	
?>