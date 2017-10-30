<?php
	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);

	$name = $_POST["name"];
	$newname = $_POST["newname"];
	$password = $_POST["password"];
	$newpassword = $_POST["newpassword"];
	$confnewpassword = $_POST["confnewpassword"];
	$username = $_POST["username"];
	
	$query = "UPDATE Person SET name = '$newname', password = '$newpassword' WHERE username = '$username'";

	print true;



?>