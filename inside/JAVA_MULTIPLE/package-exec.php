<?php
$name=$_POST["package"];
if(file_exists($name)){


echo "exists";
}
else
{
mkdir($name);
echo "created";
}
?>
<html><body><form action="upload.php" method="post">
<input type="hidden" name="pack" value="<?php echo $name;?>"/>
<input type="submit" name="upload" value="Upload files in your package"/>
</form>
</body></html>