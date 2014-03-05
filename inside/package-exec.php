<?php
session_start();
$_SESSION['dir'];
$_SESSION['name']=$_POST['package'];
if(file_exists($_SESSION['email']."/".$_SESSION['name'])){


echo "exists";
}
else
{
mkdir($_SESSION['email']."/".$_SESSION['name'],0777);
echo "created";
$_SESSION['dir']=$_SESSION['name'];

}?>
<html><body><form action="upload.php" method="post">
<input type="hidden" name="pack" value="<?php echo $_SESSION['name'];?>"/>
<input type="submit" name="upload" value="Upload files in your package"/>
</form>
<a href="create-java-package.php">Click here</a>&nbsp;to enter another package
</form></body></html>
