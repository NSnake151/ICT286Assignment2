<html>
<body>
<p>
<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$isValid = 1;
	$retval;
	$message;

	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$name = $_POST["name"];


	$query = "SELECT * FROM Person";
	$result = mysql_query($query);


	$i = 0;
	
	while($row = mysql_fetch_array($result, MYSQL_NUM))
	{
		if($row[2] == $username)
		{
			$isValid = 0;//same username
			break;
		}
	}

	
	if($isValid == 1)
	{
		
		$query = "INSERT INTO Person VALUES('$name', '$password', '$username', '$email', 0)";

		$retval = mysql_query($query);
		$message = "You have been registered";
		if(! $retval)
		{
			$isValid = -1;//query failed
			$message = "Unexpected Server error. try again";
		}
		//print($isValid); //javascript uses to display correct html
				//correct html here is a page that says creation of account
				//was successful, with a link to the browse page
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		$message = "Pick another username";
		//print($isValid);
		//js uses to display correct html.  correct html here is 
		//to display a message that the username was taken already
		//and to use a new one
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

	


?>
</p>
</body>
</html>