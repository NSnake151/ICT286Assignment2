<?php
	
	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$isValid = 0;
	$query;
	$result;
	$message;

	$password = $_POST["password"];
	$username = $_POST["username"];

	$query = "SELECT * FROM Person";
	$result = mysql_query($query);

	
	while($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		if($row[2] == $username && $row[1] == $password)
		{
			$isValid = 1;
			break;
		}
	}

		//other scripts that rely on logged in should check this cookie's value
	if($isValid == 1)
	{
		$message = "You have been logged in";
		setcookie('login', '$username');
		echo "<script type='text/javascript'>alert('$message');</script>";

	}
	else
	{
		$message = "Your username and password were incorrect. Try again";
		setcookie('login', 'false');
		echo "<script type='text/javascript'>alert('$message');</script>";

	}
		
	

	//print $isValid;



?>