<?php
	$result=array();
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT USERNAME FROM USERI';
	$stid=oci_parse($conn, $sql);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$username=oci_result($stid, 'USERNAME');
		array_push($result, $username);
	}
	echo implode(",", $result);
?>