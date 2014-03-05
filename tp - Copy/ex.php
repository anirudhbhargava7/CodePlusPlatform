<?php 
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_question"; // Table name
$tbl_name1="forum_answer"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");



if(isset($_POST['delete'])){
$ch= $_POST['checkbox'];
foreach($ch as $c)
{
$del_id = $c;
$sql = "DELETE FROM $tbl_name WHERE id='$del_id'";
$sql1 = "DELETE FROM $tbl_name1 WHERE question_id='$del_id'";
$result = mysql_query($sql);
$result1 = mysql_query($sql1);

echo $c;
}

// if successful redirect to delete_multiple.php
}
if(($result)&&($result1)){
header('Location: delete_multiple.php');//header( 'Location: tim.php' ) ;
//echo "<meta http-equiv=\"refresh\" content=\"0;URL=delete_multiple.php\">";
}
else 
{
header('Location: main_forum.php');
}
mysql_close();
?>