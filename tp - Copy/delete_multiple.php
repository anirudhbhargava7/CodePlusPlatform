<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_question"; // Table1 name
$tbl_name1="forum_answer"; // Table2 name
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

?>
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
<form name="form1" method="post" action="ex.php">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
<td width="15%" align="center" bgcolor="#E6E6E6"><strong>Views</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Replies</strong></td>
<td width="13%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
</tr>

<?php 
while($rows=mysql_fetch_array($result)){ // Start looping table row 
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $rows['id']; ?>"></td>
</tr>
<?php
/** while($rows=mysql_fetch_array($result)){
?>
<tr>
<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td></tr>
<?php
}*/
}?>
<tr>
<td colspan="5" align="center" bgcolor="#FFFFFF"><input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>
<?
// Check if delete button active, start this
mysql_close();
?>
</table>
</form></table></div></div></div>
</body></html>