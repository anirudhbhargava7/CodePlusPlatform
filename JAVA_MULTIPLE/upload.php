<html>
<head>
<title>PHP File Upload Example</title>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="file-upload.php">
<input type="file" name="fileToUpload" /><br />
<input type="submit" value="Upload File" />
</form>
<a href="run_java_main.php">Click here!!</a><span>To run your uploaded files</span>

<form action="runmultiple.php" method="post">
enter your main file name<input type="text" name="nm" />
<input type="submit" name="sb" />
</form>
</body>
</html>


