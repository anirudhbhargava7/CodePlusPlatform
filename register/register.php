<html>
<head>	<script>
function ValidateContactForm(loginForm)
{
    
    var login = document.loginForm.email.value;
    var pass = document.loginForm.password.value;
   	if(login.length==0){
	alert("You must enter a login name");
	return false;
	}
	if(pass.length==0){
	alert("Enter a password");
	return false;
	}
	if(user.length==0){
	alert("Select either admin or member");
	return false;
	}
return true;
}
</script>

</head>
<body>
<form name="loginForm" action="registerex.php" method="post" onsubmit="return ValidateContactForm(this)">
E-mail id &nbsp: &nbsp  &nbsp<input type="text" name="email" value="" />
</ br>
</ br>
Password &nbsp: <input type="text" name="password" value="" />
</ br>
</ br>
<input type="submit" name="submit" value="Register" />
</form>

</body></html>