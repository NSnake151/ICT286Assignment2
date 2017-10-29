<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$isValid = true;

	$username = $_POST["username"];


	$query = "SELECT * FROM Person";
	$result = mysql_query($query);


	$i = 0;
	
	while($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		printf("%s\n", $row[2]);
		if($row[2] == $username)
		{
			$isValid = false;
			break;
		}
	}


	if(isValid == true)
	{
		$query = "INSERT INTO Person VALUES('
		mysql_query($query);
		print isValid; //javascript uses to display correct html
				//correct html here is a page that says creation of account
				//was successful, with a link to the browse page
	}
	else
	{
		print $isValid;
		//js uses to display correct html.  correct html here is 
		//to display a message that the username was taken already
		//and to use a new one
	}

	


?>