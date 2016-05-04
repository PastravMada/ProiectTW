<?php
$conn=oci_connect("mihaela","veronica","localhost/XE");
$CSVfp = fopen("db.csv", "r");
if($CSVfp !== FALSE) {
print "<PRE>";
while(!feof($CSVfp)) {
	$data = fgetcsv($CSVfp, 1000, ",");
	if(feof($CSVfp)){
		break;
	}

	$sql = "INSERT INTO DETALII (id_detalii, origine, localizare) VALUES ('" . $data[0] . "', '" . $data[1] . "', '" . $data[2] . "')";
    $stid = oci_parse($conn,$sql);
        $r = oci_execute($stid);
            if($r) 
			{
				oci_commit($conn);
                echo 'Flower inserted...<br>';
            }
            else
            {
			    $m = oci_error($stid);
                echo 'Data was not inserted...<br>';
            }
	}
}
fclose($CSVfp);

echo "<a href='admin.php'>Back to admin page</a>";
?>