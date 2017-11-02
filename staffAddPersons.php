<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$message;	
	$query;
	$result;
	$retval;

	$inputVals = array($_POST['name'], $_POST['password'], $_POST['username'], $_POST['email'], 
		$_POST['isadmin']);
	
	if(isset($_COOKIE["login"]))
	{
			
		if($_COOKIE["login"] == "admin")
		{
			$query = "INSERT INTO Person VALUES('$inputVals[0]', '$inputVals[1]', '$inputVals[2]',
					'$inputVals[3]', '$inputVals[4]')";
			$retval = mysql_query($query);

			if(! $retval)
			{
				$message = "Unexpected server error. try again";
				echo "<script type='text/javascript'>alert('$message');</script>";

			}
			else
			{
				$message = "Addition Successful";
				echo "<script type='text/javascript'>alert('$message');</script>";

			}
		}	
		else
		{
			$message = "Action not allowed";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}

	}
	else
	{
		$message = "Not logged in. Log in first";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}

?>