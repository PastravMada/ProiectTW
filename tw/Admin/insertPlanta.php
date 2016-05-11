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
	<section id="insertFloare">
		<div style="padding-left:52px;padding-right:52px;align=center;"><h3 style="background-color:#BDB76B;color:black;padding-left:290px;">Insereaza floare</h3></div>
				<form  action="inserting.php" method="POST" autocomplete="on" enctype="multipart/form-data">
				<fieldset>
						<br>
							<label for="denumirePopulara">Denumire populara: </label>
							<input type="text" id="denumirePopulara" name="denumirePopulara" onblur="checkDenumire(this)" value=""/>
							<span id="status"></span>
						<br>
						    <br>							
							<label  for="denumireStiintifica">Denumire stiintifica: </label>
							<input type="text" id="denumireStiintifica" name="denumireStiintifica" value=""/>
						<br>
						    <br>
							<label  for="idDetalii">Id detalii: </label>
							<input type="number" id="idDetalii" name="idDetalii" onblur="checkId(this)" value=""/>
							<span id="status1"></span>
						<br>
						    <br>
							<label  for="origine">Origine: </label>
							<input type="text" id="origine" name="origine" value=""/>
						<br>
							<br>
							<label  for="localizare">Localizare: </label>
							<input type="text" id="localizare" name="localizare" value=""/>
						<br>
							<br>
							<label  for="caracteristici">Caracteristici: </label>
							<input type="text" id="caracteristici" name="caracteristici" value=""/>
						<br>
							<br>
							<label  for="inmultire">Inmultire: </label>
							<input type="text" id="inmultire" name="inmultire" value=""/>
						<br>
							<br>
							<label  for="beneficii">Beneficii: </label>
							<input type="text" id="beneficii" name="beneficii" value=""/>
						<br>
							<br>
							<label  for="regimDezvoltare">Regim dezvoltare: </label>
							<input type="text" id="regimDezvoltare" name="regimDezvoltare" value=""/>
						<br>
							<br>
							<label  for="perioadaCultivare">Perioada cultivare: </label>
							<input type="text" id="perioadaCultivare" name="perioadaCultivare" value=""/>
						<br>
							<br>
							<label  for="soiuriInrudite">Soiuri inrudite: </label>
							<input type="text" id="soiuriInrudite" name="soiuriInrudite" value=""/>
						<br>
							<br>
							<label  for="culoare">Culoare: </label>
							<input type="text" id="culoare" name="culoare" value=""/>
						<br>
						<br>
							<label  for="anotimp">Anotimp: </label>
							<input type="text" id="anotimp" name="anotimp" value=""/>
						<br>
							<br>
							<label  for="temperatura">Temperatura: </label>
							<input type="text" id="temperatura" name="temperatura" value=""/>
						<br>
							<br>
							<label  for="descriere">Descriere: </label>
							<input  type="text" id="descriere" name="descriere" value=""/>
						<br>
							<br>
							<label  for="descriereEngleza">Descriere engleza: </label>
							<input  type="text" id="descriereEngleza" name="descriereEngleza" value=""/>
						<br>
						    <br>
							<label  for="imagini">Adauga imagine: </label>
							<input type="file" id="imagini" name="imagini"/>
						<br/>
						<br/>																			
					</fieldset>
					<div2 style="padding-left:300px;"><button width="130px;" class="btn" type="submit" name="submit" value="ADAUGA FLOARE"/>ADAUGA FLOARE</button></div2>
					</form>			
					<br/>
					<br/>
	</section>		
</body>
</html>