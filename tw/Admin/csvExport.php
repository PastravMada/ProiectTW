<?php
extract($_GET);
ob_start('ob_gzhandler');
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="file.csv"');
readfile('file.csv');

$conn=oci_connect("mihaela","veronica","localhost/XE");

	$fp = fopen('file.csv', 'w');	
			$sql='SELECT * FROM DETALII';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
				while(oci_fetch($stid)){
					$id_detalii=oci_result($stid, 'ID_DETALII');
					$origine=oci_result($stid, 'ORIGINE');
					$localizare=oci_result($stid, 'LOCALIZARE');
					$caracteristici=oci_result($stid, 'CARACTERISTICI');
					$inmultire=oci_result($stid, 'INMULTIRE');
					$imagini=oci_result($stid,'IMAGINI');
					$beneficii=oci_result($stid, 'BENEFICII');
					$regimDezvoltare=oci_result($stid,'REGIMDEZVOLTARE');
					$perioadaCultivare=oci_result($stid,'PERIOADACULTIVARE');
					$soiuriInrudite=oci_result($stid, 'SOIURIINRUDITE');
					$culoare=oci_result($stid, 'CULOARE');
					$temperatura=oci_result($stid, 'TEMPERATURA');
					$anotimp=oci_result($stid, 'ANOTIMP');
					$descriereEngleza=oci_result($stid, 'DESCRIEREENGLEZA');						
				
					$sql2='SELECT * FROM PLANTE WHERE ID_DETALII=:id_detalii';
					$stid2=oci_parse($conn, $sql2);
					oci_bind_by_name($stid2, ':id_detalii', $id_detalii);
					oci_execute($stid2);
					while(oci_fetch($stid2)){
						$denumirePopulara=oci_result($stid2, 'DENUMIREPOPULARA');
						$denumireStiintifica=oci_result($stid2, 'DENUMIRESTIINTIFICA');
						$descriere=oci_result($stid2, 'DESCRIERE');
						
						fputcsv($fp,array($denumirePopulara, $denumireStiintifica, $origine, $localizare, $inmultire, $anotimp, $culoare, $soiuriInrudite, $regimDezvoltare),",");
						}
				}
fclose($fp);
?>