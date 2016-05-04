<?php 
	$id_detalii=$_GET['id_detalii'];	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(ID_DETALII) FROM PLANTE WHERE id_detalii = :id_detalii';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id_detalii', $id_detalii);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$count=oci_result($stid, 'COUNT(ID_DETALII)');
	}
	if($count==0){
		print "<span style=\"color:green;\">Acest id nu exista in baza de date.</span>";
	}
	else{
		$sql='SELECT ID_DETALII FROM PLANTE WHERE id_detalii = :id_detalii';
	    $stid=oci_parse($conn, $sql);
	    oci_bind_by_name($stid, ':id_detalii', $id_detalii);
	    oci_execute($stid);
		while(oci_fetch($stid)){
		$id=oci_result($stid, 'ID_DETALII');
	       }
		print "<span style=\"color:red;\">Id-ul $id exista.</span>";
	}
?>