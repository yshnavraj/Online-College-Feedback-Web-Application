<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body class="body">
	<header style="width: 100%; background-color:#0BEEF9; text-align: center;">
		<p style="font-family: 'Poppins', sans-serif; padding-top: 5px; font-size: 50px; display: inline;">Online College Feedback Forum</p>
			<a href="index.php"><p style="color: black; text-align: center; padding: 5px 14px; text-decoration: unset; font-family: 'Poppins', sans-serif;">Home</p></a>
		</header>
		<hr>
		<center>
	<div class="admin-login-form">

	<form method="POST" action="admin_login.php">
		<fieldset style="width:550px; font-family:'Poppins', sans-serif; font-style: italic; font-weight: bold;">
            <legend>Admin Login</legend>
            <br>
            <label for='username' >UserName:</label>
            <input type="text" name="username" id="username" class="inputs" maxlength="50" required />
            <br><br>
            <label for="password" >Password:</label>
            <input type="password" name="password" id="password" class="inputs" maxlength="50" required />
            <br><br>
            <input type="submit" class="button" name="submit" value="Login"/>
        </fieldset>
	</form>
	</div>
	</center>
	<footer style="text-align: center; padding-top: 190px; font-family:'Poppins', sans-serif;">
		Copyright@KMIT
	</footer>
</body>
</html>

<?php 

include_once 'database.php';
header("Cache-Control: no cache");

 ?>