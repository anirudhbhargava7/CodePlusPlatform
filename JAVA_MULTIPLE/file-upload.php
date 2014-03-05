<?php

if ($_FILES["fileToUpload"]["error"] > 0)
    {
    echo "Apologies, an error has occurred.";
    echo "Error Code: " . $_FILES["fileToUpload"]["error"];
    }
 else
    {

    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
	   $_FILES["fileToUpload"]["name"]);
	}
	

if (($_FILES["fileToUpload"]["type"] == "application/octet-stream"))
  {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
      $_FILES["fileToUpload"]["name"]);
  }
else
  {
  echo "Files must be .java Extension and size of less then 10,000 kb";
  }


move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
   $_FILES["fileToUpload"]["name"]);


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

system($_FILES["fileToUpload"]["name"]);
?>
