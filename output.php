<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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
	<title>Music School</title>
    
</head>
<body background="img/img.php.png">
 <div style="position:absolute; width:100%; z-index:1; " align="center" >
<div style="width:760px; z-index:2; background-color:#ffffff;"  align="left">
<div id="page-wrap"> 
<table id="Table_01" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
	<form>
	<tr><td bgcolor="#FFFFFF"><textarea name="tcccode" id="code"></textarea></td></tr>
	<tr><td>
	<br />
    <br />
	File Name &nbsp;&nbsp;<input type="text" name="file_name" value="" /></td></tr>
	<tr> <td><br />
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="submit" name="submit" value="Submit"  /></td></tr>
	</form> 
	<tr><td><br />
	<iframe scrolling="yes" height="400" width="600"> </iframe>
	</td></tr>
</table>
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