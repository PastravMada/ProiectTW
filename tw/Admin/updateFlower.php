
<html>
<head>
<title>Update Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
</head>
<body>
    <?php include('Incluziuni/headerProfile.php');?>
<h2 align=center color=red>Modificare floare</h2>
<div align=center>
<form action="updated1.php?" name="frmEdit" method="post">

<?php
$conn=oci_connect("mihaela","veronica","localhost/XE"); 
	
$sql = "SELECT * FROM plante WHERE denumirePopulara='$denumirePopulara'";
$stid = oci_parse($conn,$sql);
oci_execute($stid);
?>
<?php
while($row = oci_fetch_array($stid, OCI_BOTH)) {
	$id_planta=$row[1];
?>


<table width="550" border="0">
    <tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Origine</div></th>
    <th><input class="heighttext"type="text" name="origine" size="16" value="<?=$row[1];?>"></th></tr>
    <tr><th width="65" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Localizare</div></th>
    <th><input class="heighttext" type="text" name="localizare" size="16" value="<?=$row[2];?>"></th></tr>
    <tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Caracteristici</div></div></th>
	<th><input class="heighttext" type="text" name="caracteristici" size="16" value="<?=$row[3];?>"></th></tr>
    <tr><th width="59" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Inmultire</div></th>
	<th ><input class="heighttext" type="text" name="inmultire" size="16" value="<?=$row[4];?>"></th></tr>
    <tr><th width="7" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Beneficii</div></th>
	<th><input class="heighttext" type="text" name="beneficii" size="16" value="<?=$row[5];?>"></th></tr>
    <tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Regim Dezvoltare</div></th>
	<th><input class="heighttext" type="text" name="regimDezvoltare" size="16" value="<?=$row[6];?>"></th></tr>
	<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Perioada Cultivare</div></th>
	<th><input class="heighttext" type="text" name="perioadaCultivare" size="16" value="<?=$row[7];?>"></th></tr>
	<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Soiuri Inrudite</div></th>
	<th><input class="heighttext" type="text" name="soiuriInrudite" size="16" value="<?=$row[8];?>"></th></tr>
	  <tr><th width="65" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Culoare</div></th>
    <th><input class="heighttext" type="text" name="culoare" size="16" value="<?=$row[9];?>"></th></tr>
    <tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Temperatura</div></div></th>
	<th><input class="heighttext" type="text" name="temperatura" size="16" value="<?=$row[10];?>"></th></tr>
    <tr><th width="59" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Anotimp</div></th>
	<th ><input class="heighttext" type="text" name="anotimp" size="16" value="<?=$row[11];?>"></th></tr>
    <tr><th width="7" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere Engleza</div></th>
	<th><input class="heighttext" type="text" name="descriereEngleza" size="16" value="<?=$row[12];?>"></th></tr>
    <tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere Franceza</div></th>
	<th><input class="heighttext" type="text" name="descriereFranceza" size="16" value="<?=$row[13];?>"></th></tr>
	<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Denumire Populara</div></th>
	<th><input class="heighttext" type="text" name="denumirePopulara" size="16" value="<?=$row[14];?>"></th></tr>
	<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Denumire Stiintifica</div></th>
	<th><input class="heighttext" type="text" name="denumireStiintifica" size="16" value="<?=$row[15];?>"></th></tr>
	<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Descriere</div></th>
	<th><input class="heighttext" type="text" name="descriere" size="16" value="<?=$row[16];?>"></th></tr>
	<tr><th width="100" height="50"<div align="left">Imagine</div></th>
	<th><input type="file" name="imagini" size="16" value="<?=$row[17];?>"></th></tr>
    <th><input type="heigh" name="id_planta" size="16" value="<?=$row[0];?>"></th></tr>
</table>
<br/>
<input class="btn" type="submit" name="submit" value="UPDATE">

<?php
}
?>
</form>
</body>
</html>
