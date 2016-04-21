<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<h2 align=center style='color:black;'>Vizualizati rapoarte in format :</h2>
	<section align=center>
		<div><a href="rapoarteOption.php?format=PDF">PDF</a></div>	
		<div><a href="rapoarteOption.php?format=HTML">HTML</a></div>
		<div><a href="rapoarteOption.php?format=CSV">CSV</a></div>
	</section>
</body>
</html>