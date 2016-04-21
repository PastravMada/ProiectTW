<?php
ini_set('memory_limit', '-1');
//extract($_GET);
ob_start('ob_gzhandler');
header('Content-type: application/octet-stream');
header('Content-Disposition: attachment; filename="fileReport.csv"');
//readfile('fileReport.csv');

$conn=oci_connect("mihaela","veronica","localhost/XE");

if(isset($_POST['categorie']) && isset($_POST['sex']) && isset($_POST['d_start']) && isset($_POST['d_finish'])){
	$var=$_POST['categorie'];
	$var1=$_POST['sex'];
	$var2=$_POST['d_start'];
    $var3=$_POST['d_finish'];
	
 $fp = fopen('fileReport.csv', 'w');
       $sql='SELECT NUME_PARFUM,PRET,SEX,CATEGORIE,CANTITATE,DATA_LIVRARE FROM PARFUM p,COMENZI c WHERE p.ID_PARFUM=c.ID_PARFUM AND p.CATEGORIE = :valoare AND p.SEX=:s
													AND c.DATA_LIVRARE > :val2 AND c.DATA_LIVRARE < :val3';
        	    $stid=oci_parse($conn, $sql);
        		oci_bind_by_name($stid, ':valoare', $var);
                oci_bind_by_name($stid,':s',$var1);
				oci_bind_by_name($stid, ':val2', $var2);
                oci_bind_by_name($stid, ':val3', $var3);
        		oci_execute($stid);
				
				while(oci_fetch($stid)){
					$nume_parfum=oci_result($stid, 'NUME_PARFUM');
					$pret=oci_result($stid, 'PRET');
					$sex=oci_result($stid, 'SEX');
					$categorie=oci_result($stid, 'CATEGORIE');
				    $cantitate=oci_result($stid, 'CANTITATE');
		
                 fputcsv($fp,array($nume_parfum, $categorie, $sex, $cantitate),",");
				}

fclose($fp);
readfile('fileReport.csv');						
}

  if(isset($_POST['user'])){
		$var = $_POST['user'];
		
	   $fp = fopen('fileReport.csv', 'w');
       $sql='SELECT NUME,PRENUME,NUME_PARFUM,CANTITATE,DATA_LIVRARE FROM USERI u,COMENZI c,PARFUM p WHERE u.ID_USER=c.ID_USER AND c.ID_PARFUM=p.ID_PARFUM
									AND u.USERNAME = :valoare ORDER BY DATA_LIVRARE ASC';
	   
				$stid=oci_parse($conn, $sql);
        		oci_bind_by_name($stid, ':valoare', $var);
        		oci_execute($stid);
				
			 while(oci_fetch($stid)){
                    $nume_parfum=oci_result($stid, 'NUME_PARFUM');
					$nume=oci_result($stid, 'NUME');
					$prenume=oci_result($stid, 'PRENUME');
				    $cantitate=oci_result($stid, 'CANTITATE');
					$data=oci_result($stid, 'DATA_LIVRARE');
					
			 fputcsv($fp,array($nume, $prenume, $nume_parfum, $cantitate,$data),",");                
            }
fclose($fp);
readfile('fileReport.csv');	
}
?>