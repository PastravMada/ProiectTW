<?php 
	$denumirePopulara=$_GET['denumirePopulara'];	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(DENUMIREPOPULARA) FROM PLANTE WHERE denumirePopulara = :denumirePopulara';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':denumirePopulara', $denumirePopulara);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$count=oci_result($stid, 'COUNT(DENUMIREPOPULARA)');
	}
	if($count==0){
		print "<span style=\"color:green;\">Aceasta floare nu exista.</span>";
	}
	else{
		$sql='SELECT DENUMIREPOPULARA FROM PLANTE WHERE denumirePopulara = :denumirePopulara';
	    $stid=oci_parse($conn, $sql);
	    oci_bind_by_name($stid, ':denumirePopulara', $denumirePopulara);
	    oci_execute($stid);
		while(oci_fetch($stid)){
		$nume=oci_result($stid, 'DENUMIREPOPULARA');
	       }
		print "<span style=\"color:red;\">Floarea $nume exista.</span>";
	}
?>