<?php
session_start();
	if (isset($_SESSION['login_user']))
	{
		$username = $_SESSION['login_user'];
	}
	else{
		echo "You have not signed in";
	}
?>
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
<h2 align=center color=red>Update your profile</h2>
<div align=center>
<form action="updated.php?" name="frmEdit" method="post">

<?php
$conn=oci_connect("mihaela","veronica","localhost/XE"); 
	
$sql = "SELECT * FROM USERI WHERE username='$username'";
$stid = oci_parse($conn,$sql);
oci_execute($stid);
?>
<?php
while($row = oci_fetch_array($stid, OCI_BOTH)) {
	$id_user=$row[1];
?>

<table width="550" border="0">
    <tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Username</div></th>
    <th><input class="heighttext"type="text" name="username" size="16" value="<?=$row[1];?>"></th></tr>
    <tr><th width="65" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Password</div></th>
    <th><input class="heighttext" type="text" name="password" size="16" value="<?=$row[2];?>"></th></tr>
    <tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Nume</div></th>
	<th><input class="heighttext" type="text" name="nume" size="16" value="<?=$row[3];?>"></th></tr>
    <tr><th width="59" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Prenume</div></th>
	<th ><input class="heighttext" type="text" name="prenume" size="16" value="<?=$row[4];?>"></th></tr>
    <tr><th width="7" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Email</div></th>
	<th><input class="heighttext" type="text" name="email" size="16" value="<?=$row[5];?>"></th></tr>
    <tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Sex</div></th>
	<th><input class="heighttext" type="text" name="sex" size="16" value="<?=$row[6];?>"></th></tr>
	<tr><th width="60" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Oras</div></th>
	<th><input class="heighttext" type="text" name="oras" size="16" value="<?=$row[7];?>"></th></tr>
	<tr><th width="100" height="50" style="background-color:#BDB76B;color:black;"> <div align="left">Adresa</div></th>
	<th><input class="heighttext" type="text" name="adresa" size="16" value="<?=$row[8];?>"></th></tr>
    <th><input type="hidden" name="id_user" size="16" value="<?=$row[0];?>"></th></tr>
</table>
<br/>
<input class="btn" type="submit" name="submit" value="UPDATE">

<?php
}
?>
</form>
</body>
</html>
