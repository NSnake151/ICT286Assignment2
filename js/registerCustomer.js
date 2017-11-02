function validateRegister()
{
	window.alert("hello. in validateregister");
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var confpassword = document.getElementById("confpassword").value;
	var email = document.getElementById("email").value;
	var name = document.getElementById("name").value;

	if(username == "" || password == "" || confpassword == "" || email == "" || name == "")
	{
		window.alert("Please fill in all fields");
		return false;
	}
	if(password != confpassword)
	{
		window.alert("The two passwords do not match");
		return false;
	}
	
	return true;
}