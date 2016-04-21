<?php 
	$username=$_REQUEST['username'];
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(USERNAME) FROM USERI WHERE USERNAME=:user';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':user', $username);
	oci_execute($stid);
	while(oci_fetch($stid)){
		$count=oci_result($stid, 'COUNT(USERNAME)');
	}
	if($count!=0){
		print "<span style=\"color:red;\">Username already exist.</span>";
	}
	else{
		print "<span style=\"color:green;\">Username is available.</span>";
	}
?>