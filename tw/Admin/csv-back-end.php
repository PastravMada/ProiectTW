<?php
	ini_set('max_execution_time', 300);
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	if(isset($_GET['com'])){
		$comanda=$_GET['com'];
		echo $comanda;
	}

	if($comanda==2){
		$stid=oci_parse($conn, 'begin EXPORT_CSV_TABLE; end;');
		oci_execute($stid);
		echo "<p>S-a exportat CSV-ul</p>";
	}
	if($comanda==1){
		$stid=oci_parse($conn, 'begin CITIRE_CSV; end;');
		oci_execute($stid);
		echo "<p>S-a importat CSV-ul</p>";
	}
	oci_commit($conn);
	oci_close($conn);
?>