function validateAddPerson()
{

	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var isAdmin = document.getElementById("isadmin").value;
	var email = document.getElementById("email").value;
	var name = document.getElementById("name").value;

	if(username == "" || password == "" || isadmin == "" || email == "" || name == "")
	{
		window.alert("Please fill in all fields");
		return false;
	}
		
	window.alert("Sending request to server now.");
	return true;
}

function validateModifyPerson()
{	
	var modusername = document.getElementById("modusername").value;


	if(modusername == "")
	{
		window.alert("Please fill at least username");
		return false;

	}

	window.alert("Sending request to server now.");
	return true;


}

function validateAddProduct()
{
	var isbn = document.getElementById("isbn").value;
	var title = document.getElementById("title").value;
	var description = document.getElementById("description").value;
	var publisher = document.getElementById("publisher").value;
	var author = document.getElementById("author").value;
	var price = document.getElementById("price").value;
	var quantity = document.getElementById("quantity").value;

	if(isbn == "" || title == "" || description == "" || publisher == ""
		|| author == "" || price == "" || quantity == "")
	{
		window.alert("Please fill in all fields");
		return false;
	}
		

	window.alert("Sending request to server now.");

	return true;
}

function validateModifyProduct()
{

	var modisbn = document.getElementById("modisbn").value;

	if(modisbn == "")
	{
		window.alert("Please fill in at least isbn");
		return false;
	}

	window.alert("Sending request to server now.");

	return true;
}