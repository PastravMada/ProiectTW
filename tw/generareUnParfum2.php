<?php 
	if(!isset($_GET['id'])){
		header('location: generareParfumuri.php');
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
	<link rel="stylesheet" type="text/css" href="css/generareUnParfum.css">
	<link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>
	<?php include('Incluziuni/header.php');?>
	<section>
		<?php include('Incluziuni/aside.php');?>
		<article id="unParfum">
			<?php 
				$conn=oci_connect("mihaela","veronica","localhost/XE");
				
		//		session_start();
 
		$action = isset($_GET['action']) ? $_GET['action'] : "";
		$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
		$name = isset($_GET['name']) ? $_GET['name'] : "";
		
		if($action=='added'){
		      	echo "<div1>";
				echo "<p><strong>{$name}</strong> was added to your cart!</p>";
				echo "</div1>";
       }
		if($action=='exists'){
			    echo "<div1>";
				echo "<p><strong>{$name}</strong> already exists in your cart!</p>";
				echo "</div1>";
		}

				$sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,ID_BRAND,DESCRIERE,INGREDIENTE,ANOTIMP,OCAZIE,CATEGORIE FROM PARFUM WHERE ID_PARFUM=:val';
				$stid=oci_parse($conn, $sql);
				oci_bind_by_name($stid, ':val', $id);
				oci_execute($stid);
				while(oci_fetch($stid)){
					$id_parfum=oci_result($stid, 'ID_PARFUM');
					$nume_parfum=oci_result($stid, 'NUME_PARFUM');
					$pret=oci_result($stid, 'PRET');
					$poza=oci_result($stid, 'POZA');
					$id_brand=oci_result($stid,'ID_BRAND');
					$descriere=oci_result($stid, 'DESCRIERE');
					$ingrediente=oci_result($stid,'INGREDIENTE');
					$anotimp=oci_result($stid,'ANOTIMP');
					$ocazie=oci_result($stid, 'OCAZIE');
					$categorie=oci_result($stid, 'CATEGORIE');
				}
				echo "<h2>".$nume_parfum."</h2>";
				echo "<div class='tot' ><div class='in'> <img class='image' src='".$poza."'/></div>";				
				
				$ok = 0;
				$sql2='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
				$stid2=oci_parse($conn, $sql2);
				oci_bind_by_name($stid2, ':id_parfum', $id_parfum);
				oci_execute($stid2);
				while(oci_fetch($stid2)){
					$ok=1;
				    $discount=oci_result($stid2, 'DISCOUNT');
					$pretNew = $pret-(($discount/100)*$pret);
				echo "<div class='right'><p style='font-size:180%;color:red;' class='text-rotation''><b>PROMOTIE !!!</b></p></div>";
				echo "<div class='right'><h4  style='text-decoration: line-through;'>Pret: ".$pret." RON</h4>";
				echo "<br/>";
			//	echo "<div><h3>Reducere ".$discount." %</h3></div>";
				echo "<div><h4>Pret nou: ".$pretNew." RON</h4></div>";
				}
				if($ok==0)
				{
					echo "<div class='right'><h4>Pret: ".$pret." RON</h4>";
				}
				echo "<div class='add'><a class='a2' href='addToCart.php?id=".$id_parfum."&nume=".$nume_parfum."&pret=".$pret."'>Adauga in cos</a></div></div></div>";
				
				$sql2='SELECT NUME_BRAND,DETALII FROM BRANDS WHERE ID_BRAND=:id_brand';
				$stid2=oci_parse($conn, $sql2);
				oci_bind_by_name($stid2, ':id_brand', $id_brand);
				oci_execute($stid2);
				while(oci_fetch($stid2)){
				    $nume_brand=oci_result($stid2, 'NUME_BRAND');
				    $detalii=oci_result($stid2, 'DETALII');}
				echo "<div class='detalii'>Brand :".$nume_brand;
				echo "<br>Ocazie: ".$ocazie;
				echo "<br>Anotimp: ".$anotimp;
				echo "<br>Categorie ".$categorie;
				echo "<br>Ingrediente: ".$ingrediente;
				echo "<br>".$descriere;
				echo "</div>";
				
				?>
			</article>
			<article id='relatii'>
				<h3>Parfumuri inrudite</h3>
				<?php 
					$sql3='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,ID_PARFUM FROM PARFUM WHERE ID_BRAND=:id_brand';
					$stid3=oci_parse($conn, $sql3);
					oci_bind_by_name($stid3, ':id_brand', $id_brand);
					oci_execute($stid3);
					$count=0;
					while(oci_fetch($stid3) && $count<6){
						$id_parfum_aux=oci_result($stid3, 'ID_PARFUM');
						$nume_parfum2=oci_result($stid3, 'NUME_PARFUM');
						$pret2=oci_result($stid3, 'PRET');
						$poza2=oci_result($stid3, 'POZA');
						$id_parfum2=oci_result($stid3,'ID_PARFUM');
						if($id_parfum_aux!=$id){
							echo "<div class='rudenie'><a class='a3' href='generareUnParfum.php?id=".$id_parfum2."'>";
							echo "<div class='div2'><img class='image2' src='".$poza2."'/><p>".$nume_parfum2."</p><p>De la :".$pret2." RON</p></div>";
							echo"</a></div>";
							if($count==2){
								echo "<br>";
							}
							$count++;
						}
					}
				?>
			</article>
			<article id="tags">
				<h2>Tags</h2>
			     <div class="tags">
				 <a href="generareParfumuri.php?brand=<?=$nume_brand;?>" title="see perfumes tagged '<?=$nume_brand;?>'"><?=$nume_brand;?></a>
				 <a href="generareParfumuri.php?selectie=<?=$anotimp;?>" title="see perfumes tagged '<?=$anotimp;?>'"><?=$anotimp;?></a>
				 <a href="generareParfumuri.php?cat=<?=$categorie;?>" title="see perfumes tagged '<?=$categorie;?>'"><?=$categorie;?></a>
				 </div>
			</article>
			<article id="comentarii">
				<?php 
				echo '<form action="back-end/comentarii-back-end.php?id='.$id .'" method="post">';?>
					<textarea cols="50" rows="5" name="comentariu"></textarea>
					<input id="submit" type="submit" value="Trimite"/> 
			</form>
			<?php
			$sql4='SELECT u.ID_USER,COMENTARIU,NUME FROM COMENTARII c,USERI u WHERE c.ID_USER=u.ID_USER AND ID_PARFUM=:id_parfum';
			$stid4=oci_parse($conn, $sql4);
			oci_bind_by_name($stid4, ':id_parfum', $id);
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