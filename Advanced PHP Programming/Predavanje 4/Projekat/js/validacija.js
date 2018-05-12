function IsFormValid()
{	
	var isValid = true;
	var username = document.getElementById("username");
	var password = document.getElementById("password");
	
	if (username.value == "")
	{
		usernameSpan.innerHTML = "* Obavezno polje!";
		IsValid = false;
	}
	
	if (password.value == "")
	{
		passwordSpan.innerHTML = "* Obavezno polje!";
		isValid = false;
	}
	
	return IsValid;
}

function ValidateControl(element)
{	
	//console.log(element.name);
	var elName = element.name;
	var elementTag = document.getElementById(element.id);
	
	var errMessage = "";
	if(username == "")
	{
		errMessage == "* Obavezno polje!";
	}
	
	document.getElementById("usernameSpan").innerHTML = errMessage;
}

function blurUsername()
{
	var username = document.getElementById("username");
	var usernameSpan = document.getElementById("usernameSpan");
	
	usernameSpan.innerHTML = "";
	if (username.value == "")
	{
		usernameSpan.innerHTML = "* Obavezno polje!";
	}
}
function blurPassword()
{
	var password = document.getElementById("password");
	var passwordSpan = document.getElementById("passwordSpan");
	
	passwordSpan.innerHTML = "";
	if(password.value == "")
	{
		passwordSpan.innerHTML = "* Obavezno polje!";
	}
}

