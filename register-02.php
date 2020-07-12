<?php
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#2f3542">

	<div id="main-wrapper">
<center>
	<h2>Registration Form</h2>
<img src="images/webpic.png" class="avatar"><br>
</center>
<form class="myform" action="register.php" method="post">
	<label><b>First name</b></label>
	<input name="firstname" type="text"  placeholder="Type your first name" required/>
	<label><b>Last name</b></label><br>
	<input name="lastname" type="text" class="inputvalues" placeholder="Type your last name" required/><br>
	<br><label><b>Gender: </b></label>
	<input name="gender" type="radio" class="radiobtns" value="male" checked required> Male
	<input name="gender" type="radio" class="radiobtns" value="female" required> Female<br>
	<br><label><b>Level of Education: </b></label>
	<select class="edulvl" name="edulvl">
		<option value="Primary">Primary Education</option>
		<option value="Junior Secondary">Junior Secondary Education</option>
		<option value="Senior Secondary">Senior Secondary Education</option>
		<option value="Higher">Higher Education</option>
	</select><br>
</div>
</body>
</html>