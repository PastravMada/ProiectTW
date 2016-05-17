<?php
$conn=oci_connect("mihaela","veronica","localhost");

$xml=simplexml_load_file("db.xml");

foreach($xml->children() as $flowers){
  $id_detalii = $flowers->id_detalii;
  $origine = $flowers->origine;
  $localizare = $flowers->localizare;
  $caracteristici  = $flowers->caracteristici;
  $inmultire = $flowers->inmultire;
  $imagini = $flowers->imagini;
  $beneficii = $flowers->beneficii;
  $regimDezvoltare = $flowers->regimDezvoltare;
  $perioadaCultivare = $flowers->perioadaCultivare; 
  $soiuriInrudite  = $flowers->soiuriInrudite;
  $culoare = $flowers->culoare;
  $temperatura = $flowers->temperatura;
  $anotimp = $flowers->anotimp;
  $descriereEngleza = $flowers->descriereEngleza;
  $descriereFranceza = $flowers->descriereFranceza;
  $id_planta = $flowers->id_planta;
  $denumirePopulara = $flowers->denumirePopulara;
  $denumireStiintifica = $flowers->denumireStiintifica;
  $descriere = $flowers->descriere;
  
	$sql   = "INSERT INTO detalii (id_detalii, origine, localizare, caracteristici, inmultire, imagini, beneficii, regimDezvoltare, perioadaCultivare, 
		     soiuriInrudite, culoare, temperatura, anotimp, descriereEngleza, descriereFranceza) VALUES ('$id_detalii', '$origine', '$localizare', 
		    '$caracteristici', '$inmultire', '$imagini', '$beneficii', '$regimDezvoltare', '$perioadaCultivare', '$soiuriInrudite', '$culoare', 
		    '$temperatura', '$anotimp', '$descriereEngleza', '$descriereFranceza')";
    $stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);
    $sql1 = "INSERT INTO PLANTE(id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) VALUES ('$id_planta','$id_detalii',
	         '$denumirePopulara','$denumireStiintifica','$imagine','$descriere')";
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

echo "<a href='admin.php'>Back to admin page</a>";
?>
