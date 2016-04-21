<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
<?php 

	if(isset($_GET['id'])){
		$id_parfum=$_GET['id'];
	}
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='DELETE FROM COMENTARII WHERE ID_PARFUM=:id';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id', $id);
	oci_execute($stid);
	$sql='DELETE FROM PROMOTII WHERE ID_PARFUM=:id';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id', $id);
	oci_execute($stid);
	$sql='DELETE FROM DETALII_COMANDA WHERE ID_PARFUM=:id';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id', $id);
	oci_execute($stid);
	/*
	$sql='DELETE FROM PARFUM WHERE ID_PARFUM=:id';
	$stid=oci_parse($conn, $sql);
	*/
	$stid=oci_parse($conn, 'begin pachet_proiect.delete_parfum(:p); end;');
	oci_bind_by_name($stid, ':p', $id_parfum);
	oci_execute($stid);
	oci_close($conn);
?>
	<h3 style="text-align:center;">Parfumul a fost sters cu succes!</h3>
</body>
</html>