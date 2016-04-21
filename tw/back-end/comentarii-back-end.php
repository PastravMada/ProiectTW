<?php
session_start();
	if(!isset($_GET['id'])){
		echo "nu a";
	}
	else{
		$id=$_GET['id'];
		echo $id;
	}
	$comm=$_REQUEST['comentariu'];
	echo $comm;
	if(isset($_SESSION['login_user'])){
		echo $_SESSION['login_user'];
		$username=$_SESSION['login_user'];
	}
	else{
		header('location: ../login.php');
	}
	$conn=oci_connect("ramona","andreea","//localhost/XE");
	$sql='SELECT ID_USER FROM USERI WHERE USERNAME=:username';
	$stid=oci_parse($conn, $sql);
	oci_bind_by_name($stid, ':username', $username);
	oci_execute($stid);
	while (oci_fetch($stid)) {
		$id_user=oci_result($stid, 'ID_USER');
	}
	$sql2='INSERT INTO COMENTARII VALUES(:id_user,:id_parfum,:comentariu)';
	$stid2=oci_parse($conn, $sql2);
	oci_bind_by_name($stid2, ':id_user', $id_user);
	oci_bind_by_name($stid2, ':id_parfum', $id);
	oci_bind_by_name($stid2, ':comentariu', $comm);
	oci_execute($stid2);
	oci_close($conn);
	header('location: ../generareUnParfum.php?id='.$id);

?>