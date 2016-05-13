<?php
$conn=oci_connect("mihaela","veronica","localhost/XE");
$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$root_element = detalii."s"; 
$xml         .= "<$root_element>";

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
				
      $xml .= "<".detalii.">";
 
      foreach($result_array as $key => $value)
      {
         $xml .= "<$key>";
         $xml .= "<![CDATA[$value]]>";
         $xml .= "</$key>";
      }
 
      $xml.="</".detalii.">";
   }
}
$xml .= "</$root_element>";
header ("Content-Type:text/xml");
echo $xml;
?>
