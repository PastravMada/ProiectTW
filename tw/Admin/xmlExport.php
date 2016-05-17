<?php
$conn=oci_connect('mihaela','veronica','localhost/XE');

$xml = new SimpleXMLElement('<flowers/>');

		$sql='SELECT * FROM DETALII';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
				while($result_array=oci_fetch($stid)){
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
					$descriereFranceza=oci_result($stid, 'DESCRIEREFRANCEZA');					
					
					$sql2='SELECT * FROM PLANTE WHERE ID_DETALII=:id_detalii';
					$stid2=oci_parse($conn, $sql2);
					oci_bind_by_name($stid2, ':id_detalii', $id_detalii);
					oci_execute($stid2);
					while(oci_fetch($stid2)){
						$denumirePopulara=oci_result($stid2, 'DENUMIREPOPULARA');
						$denumireStiintifica=oci_result($stid2, 'DENUMIRESTIINTIFICA');
						$descriere=oci_result($stid2, 'DESCRIERE');

					$flower = $xml->addChild('flower');
					$flower->addChild('id_detalii', htmlentities("$id_detalii"));
					$flower->addChild('denumirePopulara',htmlentities("$denumirePopulara"));
					$flower->addChild('denumireStiintifica', htmlentities("$denumireStiintifica"));
					$flower->addChild('origine', htmlentities("$origine"));
					$flower->addChild('localizare', htmlentities("$localizare"));
					$flower->addChild('caracteristici', htmlentities("$caracteristici"));
					$flower->addChild('inmultire', htmlentities("$inmultire"));
					$flower->addChild('imagini', htmlentities("$imagini"));
					$flower->addChild('beneficii', htmlentities("$beneficii"));
					$flower->addChild('regimDezvoltare', htmlentities("$regimDezvoltare"));
					$flower->addChild('perioadaCultivare', htmlentities("$perioadaCultivare"));
					$flower->addChild('soiuriInrudite', htmlentities("$soiuriInrudite"));
					$flower->addChild('culoare', htmlentities("$culoare"));
					$flower->addChild('temperatura', htmlentities("$temperatura"));
					$flower->addChild('anotimp', htmlentities("$anotimp"));
					$flower->addChild('descriere', htmlentities("$descriere"));
					$flower->addChild('descriereEngleza', htmlentities("$descriereEngleza"));
					$flower->addChild('descriereFranceza', htmlentities("$descriereFranceza"));		
					}
   }

header ("Content-Type:text");
print ($xml->asXML());
?>
