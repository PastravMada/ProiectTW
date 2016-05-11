<!DOCTYPE html>
<?php 
	$conn=oci_connect("mihaela","veronica","localhost/XE");	
?>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	
	<div id="divRapoarte">
	<?php
	$format = isset($_GET['format']) ? $_GET['format'] : "";
	echo "<h2 align=center style='color:black;'>Vizualizare rapoarte in format $format</h2>";
		
	if($format=='XML'){
		
	}

	else if($format=='CSV'){
		echo "<section align=center>";

		echo "<div><a href='csvImport.php'><h3>Import date</h3></a></div>";
		echo "<div><a href='csvExport.php'><h3>Export date</h3></a></div>";	
		echo "</br></br>";			
		
		echo "</section>";
	}
	?>
	</div>
</body>
</html>