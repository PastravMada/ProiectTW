<?php 	
if(isset($_GET['categ'])){
	$valoare=$_GET['categ'];
	$conn=oci_connect("mihaela","veronica","localhost/XE");
    	if(!$conn)
        	echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
        else{
				$sql='SELECT * FROM DETALII WHERE ANOTIMP=:valoare';
                $stid=oci_parse($conn, $sql);
				oci_bind_by_name($stid, ':valoare', $valoare);
                oci_execute($stid);            
                    while(oci_fetch($stid)){
                        $id_detalii=oci_result($stid, 'ID_DETALII');
        				$imagine=oci_result($stid, 'IMAGINI');
												
						$sql1='SELECT * FROM PLANTE WHERE ID_DETALII=:valoare';
						$stid1=oci_parse($conn, $sql1);
						oci_bind_by_name($stid1, ':valoare', $id_detalii);
						oci_execute($stid1);
							while(oci_fetch($stid1)){
								$descriere=oci_result($stid1, 'DESCRIERE');
								echo '<div class="unParfum"><a href=generareFloare.php?id='.$id_detalii.'>';
								echo '<div align="center">';
								echo '<img  style="height:400px;width:600px;" src="'.$imagine. '"/>';
								echo '</div>';
								echo '<p class="descriereParfum">'.$descriere.'</p>';
								echo "</a></div>";	
						}						
                     }				
			}
	    oci_close($conn);
}
?>