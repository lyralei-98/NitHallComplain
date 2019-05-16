<?php
	include 'connection.php';
	if($_POST['submit']=='sign up')
	{
		$hash=md5(md5($_POST['userRoll']).$_POST['userPass']) ;
		$query="INSERT INTO `students`(`name`,`roll_number`,`contact_number`,`hall_name`,`room_number`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['userName'])."','".mysqli_real_escape_string($link,$_POST['userRoll'])."','".mysqli_real_escape_string($link,$_POST['userContact'])."','".mysqli_real_escape_string($link,$_POST['userHall'])."','".mysqli_real_escape_string($link,$_POST['userRoom'])."','".$hash."')" ;
		mysqli_query($link,$query) ;
	}
?>