<?php 
	if(!isset($_GET['id'])){
		header('location: generareFloare.php');
	}
	else{
		$id=$_GET['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareFloare.css">
</head>
<body>
	<?php include('Incluziuni/header.php');?>
	<section>
		<?php include('Incluziuni/aside.php');?>
		<article id="ofloare">
			<?php 
				$conn=oci_connect("mihaela","veronica","localhost/XE");

				$sql='SELECT * FROM DETALII WHERE ID_DETALII=:val';
				$stid=oci_parse($conn, $sql);
				oci_bind_by_name($stid, ':val', $id);
				oci_execute($stid);
				while(oci_fetch($stid)){
					$id_detalii=oci_result($stid, 'ID_DETALII');
					$origine=oci_result($stid, 'ORIGINE');
					$localizare=oci_result($stid, 'LOCALIZARE');
					$caracteristici=oci_result($stid, 'CARACTERISTICI');
					$inmultire=oci_result($stid, 'INMULTIRE');
					$imagini=oci_result($stid,'IMAGINI');
					$beneficii=oci_result($stid, 'BENEFICII');
					$regimDezvoltare=oci_result($stid,'REGIMDEZVOLTARE');
					$perioadaCultivare=oci_result($stid,'PERIOADACULTIVARE');
					$soiuriInrudite=oci_result($stid, 'SOIURIINRUDITE');
					$culoare=oci_result($stid, 'CULOARE');
					$temperatura=oci_result($stid, 'TEMPERATURA');
					$anotimp=oci_result($stid, 'ANOTIMP');
					$descriereEngleza=oci_result($stid, 'DESCRIEREENGLEZA');
				}								
								
				$sql2='SELECT * FROM PLANTE WHERE ID_DETALII=:id_detalii';
				$stid2=oci_parse($conn, $sql2);
				oci_bind_by_name($stid2, ':id_detalii', $id_detalii);
				oci_execute($stid2);
				while(oci_fetch($stid2)){
					$denumirePopulara=oci_result($stid2, 'DENUMIREPOPULARA');
					$denumireStiintifica=oci_result($stid2, 'DENUMIRESTIINTIFICA');
				    $descriere=oci_result($stid2, 'DESCRIERE');
				}
				echo "<h2>".$denumirePopulara."</h2>";
				echo "<div class='tot' ><div class='in'> <img class='image' src='".$imagini."'/></div>";
				echo "<div class='detalii'>Denumire stiintifica: ".$denumireStiintifica;
				echo "<br>Origine: ".$origine;
				echo "<br>Localizare: ".$localizare;
				echo "<br>Caracteristici ".$caracteristici;
				echo "<br>Inmultire: ".$inmultire;
				echo "<br>".$descriere;
				echo "<br> English : ".$descriereEngleza;
				echo "</div>";
				
				?>
		</article>
				<?php
				oci_close($conn);
			?>
		
	</section>
</body>
</html>