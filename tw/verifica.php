<?php 
	$username=$_GET['usernamesignup'];
	if(preg_match("/[^a-z0-9]/", $username)){
		print "<span style=\"color:red;\">Username containts illegal characters</span>";
	}
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	$sql='SELECT COUNT(USERNAME) FROM USERI WHERE USERNAME= :username';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':username', $username);
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