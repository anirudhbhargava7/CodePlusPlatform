<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="../css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../menu_bar.css" rel="stylesheet" type="text/css" />
	<link href="loginmodule.css" rel="stylesheet" type="text/css" />
	<link href="../css/fade.css" rel="stylesheet" type="text/css" />
	<link href="../lib/codemirror.css" rel="stylesheet" type="text/css" />
	
	<script src="../lib/codemirror.js"></script>
	<script src="../mode/clike/clike.js"></script>
	<link rel="stylesheet" href="../docs/docs.css" />
	<link rel="stylesheet" href="../lib/theme/night.css" />
	<script src="../mode/javascript/javascript.js"></script>
	<style>.CodeMirror {border:2px solid black;}</style>
	<title>The-Code Plus</title>
	<script>
function ValidateContactForm(loginForm)
{
    
    var login = document.loginForm.login.value;
    var pass = document.loginForm.password.value;
    var user = document.loginForm.user.value;
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
 <div style="position:absolute; width:100%; z-index:1;" align="center">
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

<form id="" name="loginForm" method="post" action="login-exec.php" onsubmit="return ValidateContactForm(this)">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Email</b></td>
      <td width="188"><input name="email" type="text" class="textfield" id="login" value="" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" value=""/></td>
    </tr>
	<tr><td>
	Login as a member</td> <td><input type="radio" name="user" value="member"/></td><br />
    </tr>
	<tr><td>
	Login as a admin</td> <td><input type="radio" checked="checked" name="user" value="admin"/></td>
    </tr>
	<tr>
	  <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form> 





</div>
</div>
</div>
<script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-csrc"
      });
	  function selectTheme(node) {
    var theme = node.options[node.selectedIndex].innerHTML;
    editor.setOption("theme", theme);
  }
    </script>
</body>

</html>
