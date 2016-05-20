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
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareFloare.css">
	<link rel="stylesheet" href="Admin/cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="Admin/cssMenu/menu.css" type="text/css" media="screen">
	<script src="oneFlower.js"></script>
</head>
<body background="back1.jpg">
	<?php include('Incluziuni/header.php');?>
	<section >
		<?php include('Incluziuni/aside.php');?>
		<article id="ofloare" style='background:white;'>
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
					$descriereFranceza=oci_result($stid, 'DESCRIEREFRANCEZA');
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
				echo "<h2 style='background-color:#BDB76B;color:black;padding-left:20px;'>".ucwords($denumirePopulara)."</h2>";
				echo "<div class='in'><img class='image' id='bigImg' align='centre' src='".$imagini."'/></div>";
				
				echo "<div id='div1'>";
				echo "<img class='smallImage' src='flower.png' onclick='changeImage(this.src)'/>";
				echo "<img class='smallImage' src='back1.jpg'  onclick='changeImage(this.src)'/>";
				echo "<img class='smallImage' src='bee.png' onclick='changeImage(this.src)'/>";
				echo "<img class='smallImage' src='back1.jpg' onclick='changeImage(this.src)'/>";
				echo "</div>";
				
				echo "<div style='background:;'class='detalii'>";
				echo "<br><br><b></b>".$descriere;
				echo "<br><br>";
				echo "<div class='tooltip'><b>English description</b>";
				echo "<span class='tooltiptext'>'".$descriereEngleza."'</span></div>";
				echo "<br>";
				echo "<div class='tooltip'><b>Description en Francais</b>";
				echo "<span class='tooltiptext'>'".$descriereFranceza."'</span></div>";
				echo "<br><br><br><b>Denumire stiintifica: </b>".$denumireStiintifica;
				echo "<br><br><b>Origine:</b> ".$origine;
				echo "<br><br><b>Localizare: </b>".$localizare;
				echo "<br><br><b>Caracteristici: </b>".$caracteristici;
				echo "<br><br><b>Inmultire: </b>".$inmultire;
				echo "<br><br><b>Beneficii: </b>".$beneficii;
				echo "<br><br><b>Regim dezvoltare: </b>".$regimDezvoltare;
				echo "<br><br><b>Perioada cultivare: </b>".$perioadaCultivare;
				echo "<br><br><b>Soiuri inrudite: </b>".$soiuriInrudite;
				echo "<br><br><b>Culoare: </b>".$culoare;
				echo "<br><br><b>Temperatura: </b>".$temperatura;
				echo "<br><br><b>Anotimp: </b>".$anotimp;				
				echo "</div>";
				
				?>
		</article>
		
		<article id="comentarii">
			<?php 
			echo '<form action="back-end/comentarii-back-end.php?id='.$id .'" method="post">';?>
				<textarea style="resize:none;" cols="50" rows="5" name="comentariu"></textarea>
				<input id="submit" type="submit" value="Adauga"/> 
			<?php	echo '</form>'; ?>
			<?php
			$sql4='SELECT u.ID_USER,COMENTARIU,NUME FROM COMENTARII c,USERI u WHERE c.ID_USER=u.ID_USER AND ID_PLANTA=:id_planta';
			$stid4=oci_parse($conn, $sql4);
			oci_bind_by_name($stid4, ':id_planta', $id);
			oci_execute($stid4);
			$ok='false';
			while (oci_fetch($stid4)) {
				$id_user=oci_result($stid4, 'ID_USER');
				$comentariu=oci_result($stid4, 'COMENTARIU');
				$nume=oci_result($stid4, 'NUME');
				if($ok=='false'){
					echo "<h3>Comentarii</h3>";
					$ok='True';
				}
				echo "<div class='unComentariu'>";
				echo "<p style='text-decoration:underline;margin-left:20px;'>".ucfirst($nume)." a comentat:</p>";
				echo "<p style='margin-left:10px;'>".$comentariu."</p>";
				echo "</div>";
			}
			if($ok=='false'){
				echo "<p style='margin-top:20px;border-top:1px dashed black;'>Nu exista comentarii despre acest produs.</p>";
			}
			?>
			</article>
		    <?php
				oci_close($conn);
			?>
		
	</section>
</body>
</html>