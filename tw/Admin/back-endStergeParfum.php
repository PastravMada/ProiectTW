<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<?php $conn=oci_connect("mihaela","veronica","localhost/XE")?> 
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<section id="deleteParfum">
	<?php
		if(isset($_POST['bra'])){
			$var=$_POST['bra'];
			echo '<h3>Parfumurile care sunt de la brandul: '.$var."</h3>";
			$sql='SELECT ID_PARFUM,NUME_PARFUM,NUME_BRAND,PRET,DETALII FROM PARFUM p,BRANDS b WHERE p.ID_BRAND=b.ID_BRAND AND b.NUME_BRAND=:var';
			$stid=oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':var', $var);
			oci_execute($stid,OCI_DEFAULT);
			while(oci_fetch($stid)){
				$id_parfum=oci_result($stid, 'ID_PARFUM');
				$nume_parfum=oci_result($stid, 'NUME_PARFUM');
				$pret=oci_result($stid, 'PRET');
				$detalii=oci_result($stid, 'DETALII');

				echo "<div class='per'>";
				echo "<h4>Nume parfum: ".$nume_parfum."</h4>";
				echo "<p>Pret: ".$pret."</p>";
				echo "<p>Detalii".$detalii."</p>";
				echo "<div class='delete'><a href='back-endStergeParfum2.php?id=".$id_parfum."'>Sterge parfum</a></div>";
				echo "</div>";
			}
			oci_close($conn);
		}
			if(isset($_POST['cat'])){
				$var=$_POST['cat'];
				echo '<h3>Parfumurile din categoria :'.$var."</h3>";
				$sql2='SELECT ID_PARFUM,NUME_PARFUM,PRET, DESCRIERE FROM PARFUM WHERE CATEGORIE=:var';
				$stid2=oci_parse($conn, $sql2);
				oci_bind_by_name($stid2, ':var', $var);
				oci_execute($stid2);
				while(oci_fetch($stid2)){
					$id_parfum=oci_result($stid2, 'ID_PARFUM');
					$nume_parfum=oci_result($stid2, 'NUME_PARFUM');
					$pret=oci_result($stid2, 'PRET');
					$detalii=oci_result($stid2, 'DESCRIERE');

					echo "<div class='per'>";
					echo "<h4>Nume parfum: ".$nume_parfum."</h4>";
					echo "<p>Pret: ".$pret."</p>";
					echo "<p>Detalii".$detalii."</p>";
					echo "<div class='delete'><a href='back-endStergeParfum2.php?id=".$id_parfum."'>Sterge parfum</a></div>";
					echo "</div>";
				}
				oci_close($conn);
			}

	?>
</section>
</body>
</html>