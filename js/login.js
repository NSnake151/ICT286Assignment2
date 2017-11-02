function validateLogin()
{
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;

	if(username == "" || password == "")
	{
		window.alert("Please enter a username and password");
		return false;
	}
	else
	{
		return true;
	}



}