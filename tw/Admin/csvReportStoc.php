<?php
extract($_GET);
ob_start('ob_gzhandler');
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="file.csv"');
readfile('file.csv');

$conn=oci_connect("mihaela","veronica","localhost/XE");

 $fp = fopen('file.csv', 'w');
 $sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,DESCRIERE,STOC,SEX FROM PARFUM';
        				$stid=oci_parse($conn, $sql);
        				oci_execute($stid);
        				while($row=oci_fetch($stid)){
        					$id_parfum=oci_result($stid, 'ID_PARFUM');
        					$nume_parfum=oci_result($stid,'NUME_PARFUM');
        					$pret=oci_result($stid, 'PRET');
							$stoc=oci_result($stid, 'STOC');
							$sex=oci_result($stid, 'SEX');

    fputcsv($fp,array($nume_parfum, $stoc, $sex, $pret),",");
						}
fclose($fp);
						

?>