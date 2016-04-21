<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">

</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<section id="insertParfum">
	<div id="result"></div>
		<h3 style="padding-left:250px;">Insereaza un nou parfum</h3>
				<form  action="inserting.php" method="POST" autocomplete="on" enctype="multipart/form-data">
				<fieldset>
						<br>
							<label for="nume_parfum">Nume: </label>
							<input type="text" id="nume_parfum" name="nume_parfum" value=""/>
						<br>
						    <br>							
							<label  for="pret">Pret: </label>
							<input type="number" id="pret" name="pret" value=""/>
						<br>
						    <br>
							<label  for="bucati">Bucati: </label>
							<input type="number" id="bucati" name="bucati" value=""/>
						<br>
							<br>
							<label  for="sex">Sex: </label>
							<input type="text" id="sex" name="sex" value=""/>
						<br>
						    <br>
							<label  for="brand">Brand: </label>
							<input type="number" id="brand" name="brand" value=""/>
							 <span id="status"></span>
						<br>
			<script type="text/javascript">
        	document.getElementById("brand").onblur=function(){
        		var xmlhhtp;
        		var brand = document.getElementById("brand");
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
        			xmlhhtp.open("GET","existBrand.php?brand="+encodeURIComponent(brand.value),true);
        			xmlhhtp.send();
        		}
        	};
        </script>
						    <br>
							<label  for="gramaj">Gramaj: </label>
							<input type="number" id="gramaj" name="gramaj" value=""/>
						<br>
							<br>
							<label  for="categorie">Categorie: </label>
							<input type="text" id="categorie" name="categorie" value=""/>
						<br>
							<br>
							<label  for="concentratie">Concentratie: </label>
							<input type="text" id="concentratie" name="concentratie" value=""/>
						<br>
							<br>
							<label  for="ocazie">Ocazie: </label>
							<input type="text" id="ocazie" name="ocazie" value=""/>
						<br>
							<br>
							<label  for="anotimp">Anotimp: </label>
							<input type="text" id="anotimp" name="anotimp" value=""/>
						<br>
							<br>
							<label  for="ingrediente">Ingrediente: </label>
							<input  type="text" id="ingrediente" name="ingrediente" value=""/>
						<br>
							<br>
							<label  for="descriere">Descriere: </label>
							<input  type="text" id="descriere" name="descriere" value=""/>
						<br>
						<br>
							<label  for="poza">Adauga Poza: </label>
							<input type="file" id="poza" name="poza"/>
						<br/>
						<br/>																
					<div2 style="padding-left:200px;"><input class="submit" type="submit" name="submit" value="ADAUGA PARFUM"/>
					</fieldset>
					</form>
					<br/>
					<br/>
	</section>		
</body>
</html>