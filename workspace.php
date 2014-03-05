<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<link href="css/wks.css" rel="stylesheet" type="text/css" />
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
<div style="width:800px; z-index:2;"  align="left">

<div style="position:relative;margin:262px 50px auto -75px;"><?php include('aa_03.php');?></div>
<div id="page-wrap"> 

<table id="Table_01" width="1122" height="633" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7">
			<img src="images/test2_034_01.jpg" width="1122" height="65" alt=""></td>
	</tr>
	<tr>
		<td rowspan="4">
			<img src="images/test2_034_02.jpg" width="111" height="567" alt=""></td>
		<td colspan="2">
			<a href="comp1.php">
				<img src="images/test2_034_03.jpg" width="137" height="158" border="0" alt=""></a></td>
		<td colspan="2" rowspan="2">
			<img src="images/test2_034_04.jpg" width="641" height="344" alt=""></td>
		<td>
			<a href="comp_cpp.php">
				<img src="images/test2_034_05.jpg" width="131" height="158" border="0" alt=""></a></td>
		<td rowspan="4">
			<img src="images/test2_034_06.jpg" width="102" height="567" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/test2_034_07.jpg" width="137" height="186" alt=""></td>
		<td>
			<img src="images/test2_034_08.jpg" width="131" height="186" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/test2_034_09.jpg" width="12" height="223" alt=""></td>
		<td colspan="2">
			<a href="comp_java.php">
				<img src="images/test2_034_10.jpg" width="133" height="157" border="0" alt=""></a></td>
		<td rowspan="2">
			<img src="images/test2_034_11.jpg" width="633" height="223" alt=""></td>
		<td>
			<a href="comp_php.php">
				<img src="images/test2_034_12.jpg" width="131" height="157" border="0" alt=""></a></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/test2_034_13.jpg" width="133" height="66" alt=""></td>
		<td>
			<img src="images/test2_034_14.jpg" width="131" height="66" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="111" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="12" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="125" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="8" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="633" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="131" height="1" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="102" height="1" alt=""></td>
	</tr>
</table>



</div>
</div></div>
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
