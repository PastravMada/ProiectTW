<?php 
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<section id="updateParfum">
		<h3>Modifica date!</h3>
		<form method="post" action="back-endUpdateParfum.php">
		<select name='brand'><option>Brand</option>
		<?php 
			$sql='SELECT NUME_BRAND FROM BRANDS';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$nume_brand=oci_result($stid, 'NUME_BRAND');
				echo "<option value='".$nume_brand."'>".$nume_brand."</option>";
			}
		?>
		</select>
		<input id="deleteParfumButton" type="submit" value="Arata Parfumuri"/>
		</form>
		<br>
		<br>
		<br>
		<form method="post" action="back-endUpdateParfum.php">
		<select name="categorie"><option>Categorie:</option>
		<?php 
			$sql='SELECT UNIQUE CATEGORIE FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$categorie=oci_result($stid, 'CATEGORIE');
				echo "<option value='".$categorie."'>".$categorie."</option>";
			}
		?>
		</select>
		<input id="deleteParfumButton" type="submit" value="Arata Parfumuri"/>
	</form>
	</section>
</body>
</html>