<?php

	$host = "localhost";
	$user = "X31873958";
	$password = "DayOneIsH2020";
	$dbc = mysql_pconnect($host, $user, $password);
	$dbname = "X31873958";	
	mysql_select_db($dbname);
	$query;
	$message;	
	$result;
	$retval;

	$inputVals = array($_POST['isbn'], $_POST['title'], $_POST['description'], $_POST['publisher'], 
		$_POST['author'], $_POST['price'], $_POST['quantity'], $_POST['newisbn']);
	
	if(isset($_COOKIE["login"]))
	{
			
		if($_COOKIE["login"] == "admin")
		{

			
			if($inputVals[1] != "")
			{
				$query = "UPDATE Textbook SET title = '$inputVals[1]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}

			if($inputVals[2] != "")
			{
				$query = "UPDATE Textbook SET productDescription = '$inputVals[2]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}

			if($inputVals[3] != "")
			{
				$query = "UPDATE Textbook SET publisher = '$inputVals[3]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}
			if($inputVals[4] != "")
			{
				$query = "UPDATE Textbook SET author = '$inputVals[4]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}

			if($inputVals[5] != "")
			{
				$query = "UPDATE Textbook SET price = '$inputVals[5]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}
			if($inputVals[6] != "")
			{
				$query = "UPDATE Textbook SET quantity = '$inputVals[6]' WHERE isbn = '$inputVals[0]'";
				mysql_query($query);
			}
			if($inputVals[7] != "")
			{
				$query = "UPDATE Textbook SET isbn = '$inputVals[7]' WHERE isbn = '$inputVals[0]'";
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