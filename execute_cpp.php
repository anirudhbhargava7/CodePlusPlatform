<?php
$code= $_POST['tcccode'];
$file= $_POST['file'];
$input=$_POST['input'];
?>

<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="css/styles-execute.css" rel="stylesheet" type="text/css" />
	<link href="menu_bar.css" rel="stylesheet" type="text/css" />
	<link href="css/fade.css" rel="stylesheet" type="text/css" />
	<link href="lib/codemirror.css" rel="stylesheet" type="text/css" />
	<script src="lib/codemirror.js"></script>
	<script src="mode/clike/clike.js"></script>
	<link rel="stylesheet" href="docs/docs.css" />
	<link rel="stylesheet" href="lib/theme/night.css" />
	<script src="mode/javascript/javascript.js"></script>
	<style>.CodeMirror {border:2px solid black;}</style>
	<title>The-Code Plus</title>
</head>
<body>
<div style="position:absolute; width:100%; z-index:1;" align="center">
 <div style="width:760px; z-index:2;  align="left">
<div style="position:relative;margin:262px 50px auto -95px;"><?php include('aa_03.php');?></div>
<div id="page-wrap"> 
<?php 
$my_input = "GUEST_CPP/input".".txt";//i have reassigned the variable...to work concatenation MAGIC :-D.
$lever = fopen($my_input, 'w') or die('Cannot open file:  '.$my_input);
fwrite($lever, $input);
$my_file = "GUEST_CPP/$file".".cpp";//i have reassigned the variable...to work concatenation MAGIC :-D.
$fileo="GUEST_CPP/$file";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $code);
$inputc="GUEST_CPP/input.txt";
$outputc="GUEST_CPP/output.txt";
$logc="GUEST_CPP/log.txt";
$run="timeout 3 ./$file>$outputc";
$runin="timeout 3 ./$fileo<$inputc>$outputc";
$cmd="g++ $my_file 2> $logc -o $fileo";
system($cmd,$retc);
if(!$retc){
if($input=="NULL"){
system($run,$reto);
}
else if($input!="NULL")
{
system($runin,$reto);
}
if(!$reto){ 
?>
<span>OUTPUT FOR THE PROGRAM</span> <br/><br/>
<div style="background-color: #FFFFFF;overflow:scroll;">
<object type="text/plain" data="<?php echo $outputc; ?>" width="800px">
  </object>
</div>

<br/><br/>

<span>ERROR/WARNING FOR THE PROGRAM</span> <br/><br/>
<div style="background-color: #FFFFFF;overflow:scroll;">
<object type="text/plain" data="<?php echo $logc; ?>" width="800px">
  </object>
</div>

<?php }
else{
//echo "runtime error";
?><span>RUNTIME ERROR FOR THE PROGRAM</span> <br/><br/>
<div style="background-color: #FFFFFF;overflow:scroll;">
<object type="text/plain" data="<?php echo $outputc; ?>" width="800px">  
</object>
</div>

</ br>

<span>ERROR/WARNING FOR THE PROGRAM</span> <br/><br/>
<div style="background-color: #FFFFFF;overflow:scroll;">
<object type="text/plain" data="<?php echo $logc; ?>" width="800px">
  </object>
</div>
<?php }
}
else
{?>
<span>ERROR/WARNING FOR THE PROGRAM</span> <br/><br/>
<div style="background-color: #FFFFFF;overflow:scroll;">
<object type="text/plain" data="<?php echo $logc; ?>" width="800px">
 </object>
</div>
<?php

}
?>
</div>
</div>
<script>
      var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        matchBrackets: true,
        mode: "text/x-csrc"
      });
	  function selectTheme(node) {
    var theme = node.options[node.selectedIndex].innerHTML;
    editor.setOption("theme", theme);
  }
 </script>
</body>
</html>
