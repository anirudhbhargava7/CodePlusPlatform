<?php
session_start();
$_SESSION['dir']=$_SESSION['email'];
?>
<html>
<head>
<title>PHP File Upload Example</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="file-upload.php">
<input type ="text" name="destination" value="<?php echo $_SESSION['dir'];?>" />
<input type="file" name="fileToUpload" /><br />
<input type="checkbox" name="main" />
<input type="submit" value="Upload File" />
</form>

<a href="run_java_main.php">Click here!!</a><span>To run your uploaded files</span></body>
</html>
