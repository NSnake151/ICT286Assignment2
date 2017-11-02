<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$query;
	
	
	$query = "SELECT * FROM Person";
	$result = mysql_query($query);
	
	if(isset($_COOKIE["login"]))
	{
			//if they failed to login
		if($_COOKIE["login"] == "admin")
		{

	
			while($row = mysql_fetch_array($result, MYSQL_NUM))
			{
				echo nl2br("Name: '$row[0]'   Password: '$row[1]'   Username: '$row[2]'   Email: '$row[3]'   isAdmin: '$row[4]'<br /> <br />");

			}
		}
		else
		{
			echo("Action not allowed");
		}

	}
	else
	{
		echo("Not logged in. Login first.");
	}
	

?>