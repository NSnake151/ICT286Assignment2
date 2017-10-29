<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$query;

	$password = $_POST["password"];
	$confPassword = $_POST["confpassword"];

	if($password != $confPassword)
	{
		print false;
		//used by js to tell the user to do it again
	}
	else
	{
		

	}



?>