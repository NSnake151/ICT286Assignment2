<?php
	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$username;
	$message;
	$newpassword = $_POST["password"];
		//if they haven't tried to login		
	if(isset($_COOKIE["login"]))
	{
			//if they failed to login
		if($_COOKIE["login"] != "false")
		{
			$username = $_COOKIE["login"];
			$message = "Details Updated";
			$query = "UPDATE Person SET  password = '$newpassword' WHERE username = '$username'";
			echo "<script type='text/javascript'>alert('$message');</script>";


		}
		else
		{
			$message = "Could not update details. Log-in first.";
			echo "<script type='text/javascript'>alert('$message');</script>";



		}
	}
	else
	{
		$message = "Could not update details. Log-in first.";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}

	
	


?>