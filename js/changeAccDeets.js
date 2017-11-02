function updateDetails()
{
	var password = document.getElementById("password").value;
	var confpassword = document.getElementById("confpassword").value;
		
	if(password != confpassword)
	{
		window.alert("passwords do not match");
		return false;
	}
	if(password == "" || confpassword == "")
	{
		window.alert("Please fill all fields");
		return false;
	}

	return true;
}