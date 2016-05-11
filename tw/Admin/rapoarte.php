<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<h2 align=center style='color:black;'>Rapoarte in format :</h2>
	<section align=center>
		<div><a href="rapoarteOption.php?format=XML">XML</a></div>	
		<div><a href="rapoarteOption.php?format=CSV">CSV</a></div>
	</section>
</body>
</html>