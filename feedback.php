<!DOCTYPE html>
<html>
<head>
	<title>Feedback Page</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<script type="text/javascript">
		function selectCat(brname, destiny)
		{
			var br = document.getElementById(brname);
			var des = document.getElementById(destiny);
			des.innerHTML="";
			if(br.value == "Faculty")
			{
				var optionArray = ["select here|select here", "WebTechnologies|Web Technologies", "CompilerDesign|Compiler Design", "PCCN|PCCN", "ComputerNetworksAndSecurity|CNS", "IntroductionToAI|Introduction To AI"];
			}else if(br.value == "Infrastructure")
			{
				var optionArray = ["select here|select here", "Canteen|Canteen", "Desks|Desks", "Boards|Boards", "FansAndACs|FansAndACs"];
			}else if(br.value == "Administration")
			{
				var optionArray = ["select here|select here", "Accounts|Accounts", "Principal|Principal"];
			}else if(br.value == "Library")
			{
				var optionArray = ["select here|select here", "InsufficientBooks|InsufficientBooks", "LibraryFaculty|LibraryFaculty"];
			}else if(br.value == "Co-circular activities")
			{
				var optionArray = ["select here|select here", "Ground|Ground", "Games|Games", "Fests|Fests", "Parties|Parties", "Events|Events"];
			}
			for(var option in optionArray)
			{
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				des.options.add(newOption);
			}
		}
	</script>
	
</head>
<body class="body" style="background-color: #a3c2c2">
		<hr>

	<form method="POST" action="feedback_posts_area.php">
			<br>
			<div class="container" style="font-family: 'Poppins', sans-serif;">
		<label class="labels">Year</label><label> :</label>
		<select name="year_select" required>
			<option>year...</option>
			<option>I</option>
			<option>II</option>
			<option>III</option>
			<option>IV</option>
		</select>
		<br><br>
		<label class="labels">Branch</label><label> :</label>
		<input type="radio" name="branch_name" value="CSE" required>CSE
		<input type="radio" name="branch_name" value="IT" required>IT
		<input type="radio" name="branch_name" value="EIE" required>EIE
		<input type="radio" name="branch_name" value="ECE" required>ECE
		<br><br>
		<label class="labels">Feedback on</label><label> :</label>
		<select name="feed_back" id="category" onchange="selectCat(this.id, 'sub_category')" required
>			<option>select</option>
			<option value="Faculty">Faculty</option>
			<option value="Infrastructure">Infrastructure</option>
			<option value="Administration">Administration</option>
			<option value="Library">Library</option>
			<option value="Co-circular activities">Co-circular activities</option>
		</select>
		<br><br>
		<label class="labels">Select Here</label><label> :</label>
		<select id="sub_category" name="sub_category">
		</select>
		<br><br>
		<label class="labels">Give your Rating</label><label> :</label>
		<input type="radio" name="rating" value="Excellent" required>Excellent
		<input type="radio" name="rating" value="Very Good" required>Very Good
		<input type="radio" name="rating" value="Good" required>Good
		<input type="radio" name="rating" value="Average" required>Average
		<input type="radio" name="rating" value="Below Average" required>Below Average
		<br><br>
		<label class="labels">Give your feedback</label><label> :</label><br><br>
		<textarea cols="50" rows="20" name="text-area" style="font-family: 'Poppins', sans-serif;
		" placeholder="Type Here ..." class="text_area" required></textarea>  <br><br>
		<input class="button" type="reset" value="RESET">
		<input class="button" type="submit" value="POST">
		</div>
	</form>
	<hr>
	<footer>
		Copyright@KMIT
	</footer>
</body>
</html>
