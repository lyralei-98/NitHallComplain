<?php
	include 'register.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Register Here</h1>
	<form method="post">
		<label>Name:</label>
		<input type="text" name="userName">
		<br>
		<label>Roll Number:</label>
		<input type="text" name="userRoll">
		<br>
		<label>Contact Number:</label>
		<input type="text" name="userContact">
		<br>
		<label>Hall Name:</label>
		<input type="text" name="userHall">
		<br>
		<label>Room Number:</label>
		<input type="text" name="userRoom">
		<br>
		<label>Password:</label>
		<input type="password" name="userPass">
		<br>
		<input type="submit" name="submit" value="sign up">
	</form>
</body>
</html>