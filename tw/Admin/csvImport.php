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

	$sql = "INSERT INTO DETALII(id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
			soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza,descriereFranceza) VALUES ('" . $data[0] . "', '" . $data[1] . "',
			'" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "',
			'" . $data[8] . "', '" . $data[12] . "', '" . $data[9] . "', '" . $data[10] . "', '" . $data[11] . "', '" . $data[13] . "',
			'" . $data[14] . "')";
    $stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);
	
	$sql1 = "INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) VALUES ('" . $data[15] . "', 
			'" . $data[0] . "', '" . $data[16] . "', '" . $data[17] . "', '" . $data[5] . "', '" . $data[18] . "')";
    $stid1 = oci_parse($conn,$sql1);
    $r1 = oci_execute($stid1);
			
            if($r && $r1) 
			{
				oci_commit($conn);
                echo 'Flower inserted...<br>';
            }
            else
            {
			    $m  = oci_error($stid);
				$m1 = oci_error($stid1);
                echo 'Data was not inserted...<br>';
            }
	}
}
fclose($CSVfp);

echo "<a href='admin.php'>Back to admin page</a>";
?>