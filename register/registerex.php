<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="register"; // Table name
$email=$_POST["email"];
$pass=$_POST["password"];
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query="INSERT INTO $tbl_name(email, password)VALUES('$email', '$pass')";
//"INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($query);
if($result)
{
echo "successfull";
}
else
{
echo "not successfull";
}

?>