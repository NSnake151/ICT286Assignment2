function registerCustomer()
{
	//window.alert("In registerCustomer");

	var xhr = new XMLHttpRequest();

	var username = document.getElementById("username").value;
	xhr.open('GET', 'http://ceto.murdoch.edu.au/~31873958/submission2/Assignment2/registerCustomer/registerCustomer.php?username' + username, true);

	xhr.responseType = 'text';
	xhr.onreadystatechange = function()
	{
		window.alert("In callback: readyState ==" + xhr.readyState + " xhr.status == " + xhr.status);
		
		
		if(xhr.readyState == 4 && xhr.status == 200)
		{	
						
			
			window.alert(xhr.responseText);
			if(xhr.responseText == 1)
			{
				//confirm success
				window.alert("You have been registered.");
			}
			else
			if(xhr.responseText == 0)
			{
				//request repeat
				window.alert("Choose another username");
			}
			else
			{
				window.alert("There was an unexpected problem with the server. Try again");
			}

		}

		//window.alert("after if block");

	}

	//window.alert("End of callback");
	
	xhr.send(null);
	


}