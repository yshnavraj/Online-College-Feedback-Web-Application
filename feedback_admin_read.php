<?php 
include_once 'database.php';
include_once 'admin_login.php';

if(isset($_SESSION['uname']))
{
	$query = "select year, branch, feedback_on, sub_feedback_on, feedback, rating, timestamp from feedback_details_and_posts";
	$GLOBALS['content'] = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body bgcolor="#a3c2c2">

<nav style="background-color: #a3c2c2; font-family: sans-serif; font-weight: bolder; display: inline;">
	<p"><i><?php echo "Welcome, ".$_SESSION['uname'];?></i></p>
	<form action="admin_log_out.php" method="POST" style="float: right;">
		<input type="submit" class="button" value="Logout">
	</form>
</nav>
<form name="frmUser" method="POST" action="">
<table align="center" border="2px">
	<tr>
		<th colspan="8"><h2>Feedbacks</h2></th>
	</tr>
	<t>
		<td>Year</td>
		<td>Branch</td>
		<td>Feedback On</td>
		<td>Feedback Category</td>
		<td>Feedback</td>
		<td>Rating</td>
		<td>Date and Time</td>
	</t>

	<?php
		while ($rows=mysqli_fetch_assoc($content)) {
		 	?>
		 	<tr>
		 		<td><?php echo $rows['year'];?></td>
		 		<td><?php echo $rows['branch'];?></td>
				<td><?php echo $rows['feedback_on'];?></td>
				<td><?php echo $rows['sub_feedback_on'];?></td>
		 		<td><?php echo $rows['feedback'];?></td>
		 		<td><?php echo $rows['rating'];?></td>
		 		<td><?php echo $rows['timestamp'];?></td>
		 	</tr> 

	<?php
		 }
		 ?> 

</table>
</form>

</body>
</html>
<?php
}
?>
