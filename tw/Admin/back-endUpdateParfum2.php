<?php 
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	if(isset($_GET['id'])){
		$id_parfum=$_GET['id'];
	}
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
		<?php
			$sql='SELECT NUME_PARFUM,STOC,PRET,NUME_BRAND,CATEGORIE,OCAZIE,ANOTIMP,INGREDIENTE,DESCRIERE FROM PARFUM p, BRANDS b WHERE p.ID_BRAND=b.ID_BRAND AND ID_PARFUM=:id';
			$stid=oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':id', $id_parfum);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$nume_parfum=oci_result($stid, 'NUME_PARFUM');
				$pret=oci_result($stid, 'PRET');
				$nume_brand=oci_result($stid, 'NUME_BRAND');
				$categorie=oci_result($stid, 'CATEGORIE');
				$ocazie=oci_result($stid, 'OCAZIE');
				$anotimp=oci_result($stid, 'ANOTIMP');
				$ingrediente=oci_result($stid, 'INGREDIENTE');
				$descriere=oci_result($stid, 'DESCRIERE');
				$stoc=oci_result($stid, 'STOC');
			}
			
			echo "<h3>Modifica parfum : ".$nume_parfum."</h3>";

			echo "<form action='checkAgain.php?id_parfum=".$id_parfum."' method='post' enctype='multipart/form-data'>";
			echo "<fieldset>";
			echo "<div class='update'>";
			echo "<label for='nume_parfum'>Nume: </label>";
			echo "<input type='text' name='nume_parfum' value='".$nume_parfum."' />";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='pret'>Pret: </label>";
			echo "<input type='number' name='pret' value='".$pret."' />";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='stoc'>Stoc: </label>";
			echo "<input type='number' name='stoc'  value='".$stoc."' />";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='nume_brand'>Brand: </label>";
			echo "<input id='nume_brand' type='text' name='nume_brand' value='".$nume_brand."' />";
			echo "<br><span id='status'></span>";
			echo "</div>";?>
			<script type="text/javascript">
        	document.getElementById("nume_brand").onblur=function(){
        		var xmlhhtp;
        		var brand = document.getElementById("nume_brand");
        		var value = brand.value;
        		if(brand.value != ""){
        			if(window.XMLHttpRequest){
        				xmlhhtp = new XMLHttpRequest();
        			}else{
        				xmlhhtp = new ActiveXObject("Microsoft.XMLHTTP");
        			}
        			xmlhhtp.onreadystatechange = function(){
        				if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        					document.getElementById("status").innerHTML=xmlhhtp.responseText;
        				}
        			};
        			xmlhhtp.open("GET","existBrand2.php?brand="+encodeURIComponent(brand.value),true);
        			xmlhhtp.send();
        		}
        	};
        </script>
        <?php

			echo "<div class='update'>";
			echo "<label for='categorie'>Categorie: </label>";
			echo "<input type='text' name='categorie' value='".$categorie."' />";
			echo "</div>";


			echo "<div class='update'>";
			echo "<label for='ocazie'>Ocazie: </label>";
			echo "<input type='text' name='ocazie' value='".$ocazie."' />";
			echo "</div>";


			echo "<div class='update'>";
			echo "<label for='anotimp'>Anotimp: </label>";
			echo "<input type='text' name='anotimp' value='".$anotimp."' />";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='ingrediente'>Ingrediente: </label>";
			echo "<input type='text' name='ingrediente' value='".$ingrediente."' />";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='descriere'>Descriere: </label>";
			echo "<textarea cols='46' rows='5' name='descriere'>".$descriere."</textarea>";
			echo "</div>";

			echo "<div class='update'>";
			echo "<label for='poza'>Schimbati poza: </label>";
			echo "<input type='file' id='poza' name='poza'/>";
			echo "</div>";
			
			echo "<input id='submit' type='submit' value='Modifica'/> ";
			echo "</fieldset>";
			echo "</form>";
		?>
	</section>
</body>
</html>
