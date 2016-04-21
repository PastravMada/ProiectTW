<?php 
	$brand=$_GET['brand'];	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(ID_BRAND) FROM BRANDS WHERE id_brand= :id_brand';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':id_brand', $brand);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$count=oci_result($stid, 'COUNT(ID_BRAND)');
	}
	if($count==0){
		print "<span style=\"color:red;\">Brand does not exist.</span>";
	}
	else{
		print "<span style=\"color:green;\">Brand exist.</span>";
	}
?>