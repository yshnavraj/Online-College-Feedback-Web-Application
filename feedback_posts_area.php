<?php

include_once 'database.php';

$year = $_POST['year_select'];
$branch = $_POST['branch_name'];
$feedback_on = $_POST['feed_back'];
$sub_feedback_on = $_POST['sub_category'];
$feedback=$_POST['feed_back'];
$text_area = $_POST['text-area'];
$rating = $_POST['rating'];

$insertion_query = mysqli_query($connect, "insert into feedback_details_and_posts (year, branch, feedback_on, sub_feedback_on, feedback, rating) values('$year', '$branch', '$feedback_on', '$sub_feedback_on', '$text_area', '$rating')");

if($insertion_query)
{
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body style="background-color: #a3c2c2;">
<center>
<p style="font-family: sans-serif; font-weight: bold; font-style: italic;">Your Feedback is Taken Successfully</p>
<form method="POST" action="index.php">
<input type="submit" class="button" value="Return Home">
</form>
</center>

</body>
</html>
	<?php
}

?>