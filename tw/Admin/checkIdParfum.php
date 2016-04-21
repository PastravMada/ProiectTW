<?php 
	$id_parfum=$_GET['id_parfum'];	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(ID_PARFUM) FROM PARFUM WHERE id_parfum = :id_parfum';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id_parfum', $id_parfum);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$count=oci_result($stid, 'COUNT(ID_PARFUM)');
	}
	if($count==0){
		print "<span style=\"color:red;\">This perfume does not exist.</span>";
	}
	else{
		$sql='SELECT NUME_PARFUM FROM PARFUM WHERE id_parfum = :id_parfum';
	    $stid=oci_parse($conn, $sql);
	    oci_bind_by_name($stid, ':id_parfum', $id_parfum);
	    oci_execute($stid);
		while(oci_fetch($stid)){
		$nume=oci_result($stid, 'NUME_PARFUM');
	       }
		print "<span style=\"color:green;\">Perfume $nume exists.</span>";
	}
?>