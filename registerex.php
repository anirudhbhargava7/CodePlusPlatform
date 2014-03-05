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

?>
<?php
//Rest of my code bla bla bla
// Right before the insert statement for customerdetail (which includes their email):
$emailCheck = mysql_query("SELECT email FROM $tbl_name WHERE email = '".$email."'");
	if (mysql_num_rows($emailCheck) > 0) {
	?><script type="text/javascript">
	       alert("The email address <?php echo $_POST['email']; ?> is already registered - Please Try A Different One.");
               history.back();
            </script><?php
	} /* must include this '}' */
// Insert statement below and rest of code
?>
<?php
$query="INSERT INTO $tbl_name(email, password)VALUES('$email', '$pass')";
//"INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysql_query($query);
if($result)
{
if(file_exists($email))
{
?>
<script type="text/javascript">
	       alert("This Package  <?php echo $_POST['email']; ?> is already registered - Please Try A Different One.");
               history.back();
            </script>
	<?php }
	else
	{
		mkdir('inside/'.$email);
		echo "created    ";
?>
<?php
echo "Login successfull Redirecting to Home page";
header('Location: home.php');
 }
 }
else
{
echo "Registration not successfull Ther is some Error with your page";
}

?>
