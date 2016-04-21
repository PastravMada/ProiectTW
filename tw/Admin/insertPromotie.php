<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
<style>
body  {
    background-image: url("back1.jpeg");
    background-color: #cccccc;
   background-attachment:fixed;
}
</style>
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	<section id="insertPromotie">
	<div id="result"></div>
		<h3>Adauga o noua promotie</h3>
				<form  style="background-color:white;" action="insertingPromotie.php" method="POST" autocomplete="on" enctype="multipart/form-data">
						<br>
							<label for="id_parfum">ID PARFUM: </label>
							<input type="number" id="id_parfum" name="id_parfum" value=""/>
							<span id="status"></span>
							<br>
			<script type="text/javascript">
        	document.getElementById("id_parfum").onblur=function(){
        		var xmlhhtp;
        		var id_parfum = document.getElementById("id_parfum");
        		var value = id_parfum.value;
        		if(id_parfum.value != ""){
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
        			xmlhhtp.open("GET","checkIdParfum.php?id_parfum="+encodeURIComponent(id_parfum.value),true);
        			xmlhhtp.send();
        		}
        	};
        </script>
						    <br>							
							<label  for="discount">DISCOUNT: </label>
							<input type="number" id="discount" name="discount" value=""/>
						<br>
					 	    <br>
							<label  for="data_inceput">DATA INCEPUT: </label>
							<input type="text" id="data_inceput" name="data_inceput" value=""/>
						<br>
							<br>
							<label  for="data_sfarsit">DATA SFARSIT: </label>
							<input type="text" id="data_sfarsit" name="data_sfarsit" value=""/>
						<br>
						    <br>																
					    <div1><input class="submit" type="submit" name="submit" value="ADAUGA PROMOTIE"/></div1>
					</form>
	</section>		
</body>
</html>