<?
session_start();
?>
<html>
<head>
</head>
<body>
<form action="package-exec.php" method="post">
<input type="text" name="package" value="<?php echo$_SESSION['dir'];?>"/>
<input type="submit" name="Submit" value="Create Package"/>
</form>
</body>
</html>