<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$message;	
	$result;
	$retval;

	$inputVals = array($_POST['modname'], $_POST['modpassword'], $_POST['modusername'], $_POST['modemail'], 
		$_POST['modisadmin'], $_POST['modnewusername']);
	
	if(isset($_COOKIE["login"]))
	{
			
		if($_COOKIE["login"] == "admin")
		{
			
			if($inputVals[1] != "")
			{
				$query = "UPDATE Person SET password = '$inputVals[1]' WHERE username = '$inputVals[2]'";
				mysql_query($query);
			}

			if($inputVals[5] != "")
			{
				$query = "UPDATE Person SET username = '$inputVals[5]' WHERE username = '$inputVals[2]'";
				mysql_query($query);
			}

			if($inputVals[3] != "")
			{
				$query = "UPDATE Person SET email = '$inputVals[3]' WHERE username = '$inputVals[2]'";
				mysql_query($query);
			}
			if($inputVals[4] != "")
			{
				$query = "UPDATE Person SET isAdmin = '$inputVals[4]' WHERE username = '$inputVals[2]'";
				mysql_query($query);
			}
			if($inputVals[0] != "")
			{
				$query = "UPDATE Person SET name = '$inputVals[0]' WHERE username = '$inputVals[2]'";
				mysql_query($query);
			}

			$message = "Update complete";
			echo "<script type='text/javascript'>alert('$message');</script>";

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