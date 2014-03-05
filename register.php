<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<link href="menu_bar.css" rel="stylesheet" type="text/css" />
	<link href="css/fade.css" rel="stylesheet" type="text/css" />
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<link href="lib/codemirror.css" rel="stylesheet" type="text/css" />
	<script src="lib/codemirror.js"></script>
	<script src="mode/clike/clike.js"></script>
	<link rel="stylesheet" href="docs/docs.css" />
	<link rel="stylesheet" href="lib/theme/night.css" />
	<script src="mode/javascript/javascript.js"></script>
	<style>.CodeMirror {border:2px solid black;}</style>
	<title>The-Code Plus</title>
<script>
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
        if(pass.length<4){
	alert("Password should be 4 or greater than 4 characters");
	return false;
	}
	var atpos=login.indexOf("@");
        var ltpos=login.lastIndexOf("@");
	var dotpos=login.lastIndexOf(".");
	
           if(atpos!==ltpos){
        alert("Not a valid e-mail address");
  	return false;
}
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	alert("Not a valid e-mail address");
  	return false;
  	}
        
return true;
}
</script>

</head>
<body><div style="position:absolute; width:100%; z-index:1;" align="center">
<div style="width:760px; z-index:2;"  align="left">
<div class="Search"><form class="showtextback" action="search.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3744574135711352:1463638204" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="16" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>
</div>
<div style="position:relative;margin:240px -150px auto -95px;"><?php include('aa_03.php');?></div>
<div id="page-wrap"> 

<form name="loginForm" action="registerex.php" method="post" onSubmit="return ValidateContactForm(this)">
E-mail id &nbsp; &nbsp;<input type="text" name="email" value="" />
<br/>
<br/>
Password &nbsp; <input type="password" name="password" value="" />
<br/>
<br/>
<input type="submit" name="submit" value="Register" />
</form>
</div>
</div>
</div>
<script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-c++src"
      });
	  function selectTheme(node) {
    var theme = node.options[node.selectedIndex].innerHTML;
    editor.setOption("theme", theme);
  }
    </script>
</body>

</html>
