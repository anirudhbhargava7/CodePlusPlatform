<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="../project/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../project/menu_bar.css" rel="stylesheet" type="text/css" />
	<link href="../project/css/fade.css" rel="stylesheet" type="text/css" />
	<link href="../project/css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../project/lib/codemirror.css" rel="stylesheet" type="text/css" />
	<script src="../project/lib/codemirror.js"></script>
	<script src="../project/mode/clike/clike.js"></script>
	<link rel="stylesheet" href="../project/docs/docs.css" />
	<link rel="stylesheet" href="../project/lib/theme/night.css" />
	<script src="mode/javascript/javascript.js"></script>
	<style>.CodeMirror {border:2px solid black;}</style>
	<title>The-Code Plus</title>
</head><body>
 <div style="position:absolute; width:100%; z-index:1;" align="center">
 <div style="width:760px; z-index:2;"  align="left">
<div id="page-wrap">
<table width="800px"> 
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="forum_question"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($sql);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>
</table></div></div></div></body></html>