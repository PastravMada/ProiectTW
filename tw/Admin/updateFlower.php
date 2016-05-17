<?php 
	$conn=oci_connect("mihaela","veronica","localhost");
	if(isset($_GET['id'])){
		$id_flower=$_GET['id'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
	<script src="functionsAdmin.js"></script>
</head>
<body>
    <?php include('IncluziuniAdmin/headerAdmin.php');?>
	<h2 align=center>Modificare floare</h2>
<div align=center>
<?php
echo "<form action='update1.php?id=".$id_flower."' method='post' enctype='multipart/form-data'>";
		$sql='SELECT * FROM DETALII WHERE ID_DETALII=:id';
			$stid=oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':id', $id_flower);
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
				
					$sql2='SELECT * FROM PLANTE WHERE ID_DETALII=:id_detalii';
					$stid2=oci_parse($conn, $sql2);
					oci_bind_by_name($stid2, ':id_detalii', $id_detalii);
					oci_execute($stid2);
					while(oci_fetch($stid2)){
						$denumirePopulara=oci_result($stid2, 'DENUMIREPOPULARA');
						$denumireStiintifica=oci_result($stid2, 'DENUMIRESTIINTIFICA');
						$descriere=oci_result($stid2, 'DESCRIERE');
					?>	
					<table width="550" border="0">
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Id detalii</div></th>
					<th><input class="heighttext"type="text" name="id_detalii" size="16" value="<?=$id_detalii;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Denumire populara</div></th>
					<th><input class="heighttext"type="text" name="denumirePopulara" size="16" value="<?=$denumirePopulara;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Denumire stiintifica</div></th>
					<th><input class="heighttext"type="text" name="denumireStiintifica" size="16" value="<?=$denumireStiintifica;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Origine</div></th>
					<th><input class="heighttext"type="text" name="origine" size="16" value="<?=$origine;?>"></th></tr>
					<tr><th width="65" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Localizare</div></th>
					<th><input class="heighttext" type="text" name="localizare" size="16" value="<?=$localizare;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Caracteristici</div></div></th>
					<th><input class="heighttext" type="text" name="caracteristici" size="16" value="<?=$caracteristici;?>"></th></tr>
					<tr><th width="59" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Inmultire</div></th>
					<th ><input class="heighttext" type="text" name="inmultire" size="16" value="<?=$inmultire;?>"></th></tr>
					<tr><th width="7" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Beneficii</div></th>
					<th><input class="heighttext" type="text" name="beneficii" size="16" value="<?=$beneficii;?>"></th></tr>
					<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Regim Dezvoltare</div></th>
					<th><input class="heighttext" type="text" name="regimDezvoltare" size="16" value="<?=$regimDezvoltare;?>"></th></tr>
					<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Perioada Cultivare</div></th>
					<th><input class="heighttext" type="text" name="perioadaCultivare" size="16" value="<?=$perioadaCultivare;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Soiuri Inrudite</div></th>
					<th><input class="heighttext" type="text" name="soiuriInrudite" size="16" value="<?=$soiuriInrudite;?>"></th></tr>
					<tr><th width="65" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Culoare</div></th>
					<th><input class="heighttext" type="text" name="culoare" size="16" value="<?=$culoare;?>"></th></tr>
					<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Temperatura</div></div></th>
					<th><input class="heighttext" type="text" name="temperatura" size="16" value="<?=$temperatura;?>"></th></tr>
					<tr><th width="59" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Anotimp</div></th>
					<th ><input class="heighttext" type="text" name="anotimp" size="16" value="<?=$anotimp;?>"></th></tr>
					<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere</div></th>
					<th><input class="heighttext" type="text" name="descriereFranceza" size="16" value="<?=$descriere;?>"></th></tr>
					<tr><th width="7" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere Engleza</div></th>
					<th><input class="heighttext" type="text" name="descriereEngleza" size="16" value="<?=$descriereEngleza;?>"></th></tr>
					<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere Franceza</div></th>
					<th><input class="heighttext" type="text" name="descriereFranceza" size="16" value="<?=$descriereFranceza;?>"></th></tr>
					</table>
					<br/>
				<?php
				echo "<label>Schimbati imaginea: </label>";
				echo "<input type='file' name='imagini'/>";
				}
		}
		echo "<input id='submit' type='submit' value='Modifica'/> ";
		?>
</form>
</body>
</html>
