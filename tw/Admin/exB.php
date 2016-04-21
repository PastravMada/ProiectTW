<?php 
	$brand=$_GET['brand'];
	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT ID_BRAND FROM BRANDS WHERE id_brand= :id_brand';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id_brand', $brand);
	$r = oci_execute($stid);
	 while(oci_fetch($stid)){
		if(oci_result($stid, 'ID_BRAND')==$brand){
		print "<span style=\"color:red;\">Brand  exist.</span>";
	}
	else
	if(oci_result($stid, 'ID_BRAND')!=$brand){
		print "<span style=\"color:green;\">Brand does not exist.</span>";
	}
	}
?>