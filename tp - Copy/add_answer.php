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
$tbl_name="forum_answer"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get value of id that sent from hidden field 
$id=$_POST['id'];

// Find highest answer number. 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 

$datetime=date("d/m/y H:i:s"); // create date and time

// Insert answer 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2);

if($result2){
echo "Successful<BR>";
echo "<a href='view_topic.php?id=".$id."'>View your answer</a>";

// If added new answer, add value +1 in reply column 
$tbl_name2="forum_question";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);

}
else {
echo "ERROR";
}
mysql_close();
?>
</table></div></div></div></body></html>
