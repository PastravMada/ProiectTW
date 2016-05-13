<?php
$conn=oci_connect("mihaela","veronica","localhost/XE");
$xmlDoc = new DOMDocument();
$xmlDoc->load("bd.xml");


$xmlObject = $xmlDoc->getElementsByTagName('ROW');
$itemCount = $xmlObject->length;

for ($i=0; $i < $itemCount; $i++){
  $id_detalii = $xmlObject->ROW($i)->getElementsByTagName('id_detalii')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $origine = $xmlObject->ROW($i)->getElementsByTagName('origine')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $localizare = $xmlObject->ROW($i)->getElementsByTagName('localizare')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $caracteristici  = $xmlObject->ROW($i)->getElementsByTagName('caracteristici')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $inmultire = $xmlObject->ROW($i)->getElementsByTagName('inmultire')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $imagini = $xmlObject->ROW($i)->getElementsByTagName('imagini')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $beneficii = $xmlObject->ROW($i)->getElementsByTagName('beneficii')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $regimDezvoltare = $xmlObject->ROW($i)->getElementsByTagName('regimDezvoltare')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $perioadaCultivare= $xmlObject->ROW($i)->getElementsByTagName('perioadaCultivare')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $soiuriInrudite  = $xmlObject->ROW($i)->getElementsByTagName('soiuriInrudite')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $culoare = $xmlObject->ROW($i)->getElementsByTagName('culoare')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $temperatura= $xmlObject->ROW($i)->getElementsByTagName('temperatura')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $anotimp = $xmlObject->ROW($i)->getElementsByTagName('anotimp')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $descriereEngleza= $xmlObject->ROW($i)->getElementsByTagName('descriereEngleza')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $descriereFranceza = $xmlObject->ROW($i)->getElementsByTagName('descriereFranceza')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $id_planta= $xmlObject->ROW($i)->getElementsByTagName('id_planta')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $denumirePopulara = $xmlObject->ROW($i)->getElementsByTagName('denumirePopulara')->ROW(0)->childNodes->ROW(0)->nodeValue;
   $denumireStiintifica= $xmlObject->ROW($i)->getElementsByTagName('denumirestiintifica')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $descriere = $xmlObject->ROW($i)->getElementsByTagName('descriereFranceza')->ROW(0)->childNodes->ROW(0)->nodeValue;
  $sql   = "INSERT INTO detalii (id_detalii, origine, localizare, caracteristici, inmultire, imagini, beneficii, regimDezvoltare, perioadaCultivare, soiuriInrudite, culoare, temperatura, anotimp, descriereEngleza, descriereFranceza) VALUES ('$id_detalii', '$origin', '$localizare', '$caracteristici', '$inmultire', '$imagini', '$beneficii', '$regimDezvoltare', '$perioadaCultivare', '$soiuriInrudite', '$culoare', '$temperatura', '$anotimp', '$descriereEngleza', '$descriereFranceza')";
     $stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);
    $sql1 = "INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) VALUES ('$id_planta','$id_detalii','$denumirePopulara','$denumireStiintifica','$imagine','$descriere')";
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
}
echo "<a href='admin.php'>Back to admin page</a>";
?>
