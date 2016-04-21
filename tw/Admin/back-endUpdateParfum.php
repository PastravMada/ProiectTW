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
	<section id="deleteParfum">
		<?php
		if(isset($_POST['brand'])){
			$var=$_POST['brand'];
			echo '<h3>Parfumurile care sunt de la brandul: '.$var."</h3>";
			$sql='SELECT ID_PARFUM,NUME_PARFUM,NUME_BRAND,PRET,STOC FROM PARFUM p,BRANDS b WHERE p.ID_BRAND=b.ID_BRAND AND b.NUME_BRAND=:var';
			$stid=oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':var', $var);
			oci_execute($stid,OCI_DEFAULT);
			while(oci_fetch($stid)){
				$id_parfum=oci_result($stid, 'ID_PARFUM');
				$nume_parfum=oci_result($stid, 'NUME_PARFUM');
				$pret=oci_result($stid, 'PRET');
				$stoc=oci_result($stid, 'STOC');

				echo "<div class='per'>";
				echo "<h4>Nume parfum: ".$nume_parfum."</h4>";
				echo "<p>Pret: ".$pret."</p>";
				echo "<p>Stoc: ".$stoc."</p>";
				echo "<div class='delete'><a href='back-endUpdateParfum2.php?id=".$id_parfum."'>Modifica parfum</a></div>";
				echo "</div>";
			}
			oci_close($conn);
		}
			if(isset($_POST['categorie'])){
				$var=$_POST['categorie'];
				echo '<h3>Parfumurile din categoria :'.$var."</h3>";
				$sql2='SELECT ID_PARFUM,NUME_PARFUM,PRET, STOC FROM PARFUM WHERE CATEGORIE=:var';
				$stid2=oci_parse($conn, $sql2);
				oci_bind_by_name($stid2, ':var', $var);
				oci_execute($stid2);
				while(oci_fetch($stid2)){
					$id_parfum=oci_result($stid2, 'ID_PARFUM');
					$nume_parfum=oci_result($stid2, 'NUME_PARFUM');
					$pret=oci_result($stid2, 'PRET');
					$stoc=oci_result($stid2, 'STOC');

					echo "<div class='per'>";
					echo "<h4>Nume parfum: ".$nume_parfum."</h4>";
					echo "<p>Pret: ".$pret."</p>";
					echo "<p>STOC".$stoc."</p>";
					echo "<div class='delete'><a href='back-endUpdateParfum2.php?id=".$id_parfum."'>Modifica parfum</a></div>";
					echo "</div>";
				}
				oci_close($conn);
			}

	?>
	</section>
	<p></p>
	<p></p>
	<li><a href="update.php">Choose other...</a></li>
</body>
</html>
