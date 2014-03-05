<?php
session_start();
$_SESSION['dir']=$_POST['destination'];
$_SESSION['email'];
if ($_FILES["fileToUpload"]["error"] > 0)
    {
    echo "Apologies, an error has occurred.";
    echo "Error Code: " . $_FILES["fileToUpload"]["error"];
    }
 else
    {

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
	   $_SESSION['dir']."/".$_FILES["fileToUpload"]["name"]);
	}
	

if (($_FILES["fileToUpload"]["type"] == "application/octet-stream"))
  {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      $_SESSION['dir']."/".$_FILES["fileToUpload"]["name"]);
  }
else
  {
  echo "Files must be .java Extension and size of less then 10,000 kb";
  }


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
   $_SESSION['dir']."/".$_FILES["fileToUpload"]["name"]);


echo "<table border=\"1\">";
echo "<tr><td>Client Filename: </td>
   <td>" . $_FILES["fileToUpload"]["name"] . "</td></tr>";
echo "<tr><td>File Type: </td>
   <td>" . $_FILES["fileToUpload"]["type"] . "</td></tr>";
echo "<tr><td>File Size: </td>
   <td>" . ($_FILES["fileToUpload"]["size"] / 1024) . " Kb</td></tr>";
echo "<tr><td>Name of Temporary File: </td>
   <td>" . $_FILES["fileToUpload"]["tmp_name"] . "</td></tr>";
echo "</table>";

echo $_FILES["fileToUpload"]["name"];

//$cmd="javac C.java";
$cmd="javac"." ".$_FILES["fileToUpload"]["name"]." "."2>log.txt";
/*
$brknam=$_FILES["fileToUpload"]["name"];
function returnfilename($brkname)
{
return key(explode(".",$brkname));
}
echo $brk;
$brk=returnfilename($brknam);
*/
$runjava="java C 2>output.txt";

$x=getcwd();
echo $x;
chdir($_SESSION['dir']);
$y=getcwd();
echo $y;
system($cmd,$retcomp);
if(!$retcomp)
{
system($runjava,$retrun);
if($retrun)
{
echo "its ran";
}
else{
echo "runtim problem";
}
}
else{
echo "compilation error";
}


?>
