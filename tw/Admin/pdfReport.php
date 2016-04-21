<?php

require("fpdf/fpdf.php");
$conn=oci_connect("mihaela","veronica","localhost/XE");

 if(isset($_POST['categorie']) && isset($_POST['sex']) && isset($_POST['d_start']) && isset($_POST['d_finish'])){
	$var=$_POST['categorie'];
	$var1=$_POST['sex'];
	$var2=$_POST['d_start'];
    $var3=$_POST['d_finish'];
	
	$pdf=new FPDF();
	$pdf->SetFont('times','',12);
	$pdf->SetTextColor(50,60,100);
	$pdf->AddPage();
	$pdf->SetXY (85,0);
	$pdf->Line(10,23,200,23);
	$pdf->Ln(13);
	$pdf->SetXY (15,5);
	$pdf->Cell(10,55,'Nume Parfum', 0, 0, 'L');
	$pdf->SetXY (90,5);
	$pdf->Cell(10,55,'Categorie', 0, 0, 'L');
	$pdf->SetXY (120,5);
	$pdf->Cell(10,55,'Sex', 0, 0, 'L');
	$pdf->SetXY (165,5);
	$pdf->Cell(10,55,'Cantitate vanduta', 0, 0, 'L');
	$pdf->Line(10,40,200,40);
	$pdf->Ln(10);
	$y = 10;
	$pdf->SetFont('Arial','',12);
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
						//	$cantitate=$row[2];
							$pdf->SetXY (15,$y);
							$pdf->Cell(10,73, $nume_parfum, 0, 0, 'L');
							$pdf->SetXY (90,$y);
							$pdf->Cell(10,73,$categorie,0, 0, 'L');
							$pdf->SetXY (120,$y);
							$pdf->Cell(10,73,$sex,0, 0, 'L');
							$pdf->SetXY (165,$y);
							$pdf->Cell(10,73,$cantitate,0, 0, 'L');
						    $y = $y + 10;
							if (($y + 10) >= 200) {
                                    $pdf->AddPage();
                                    $y = 15;	

									$pdf->Line(10,23,200,23);
									$pdf->Ln(13);
									$pdf->SetXY (15,5);
									$pdf->Cell(10,55,'Nume Parfum', 0, 0, 'L');
									$pdf->SetXY (90,5);
									$pdf->Cell(10,55,'Categorie', 0, 0, 'L');
									$pdf->SetXY (120,5);
									$pdf->Cell(10,55,'Sex', 0, 0, 'L');
									$pdf->SetXY (165,5);
									$pdf->Cell(10,55,'Cantitate Vanduta', 0, 0, 'L');
									$pdf->Line(10,40,200,40);
									$pdf->Ln(10);
								}
							//	$pdf->Output();
				        }	
	      $pdf->Output();
									
               	
//$pdf->Output();
print "complete";
}
if(isset($_POST['user'])){
		$var = $_POST['user'];
		
	$pdf=new FPDF();
	$pdf->SetFont('times','',12);
	$pdf->SetTextColor(50,60,100);
	$pdf->AddPage();
	$pdf->SetXY (85,0);
	$pdf->Line(10,23,200,23);
	$pdf->Ln(13);
	$pdf->SetXY (15,5);
	$pdf->Cell(10,55,'Nume', 0, 0, 'L');
	$pdf->SetXY (50,5);
	$pdf->Cell(10,55,'Prenume', 0, 0, 'L');
	$pdf->SetXY (90,5);
	$pdf->Cell(10,55,'Parfum', 0, 0, 'L');
	$pdf->SetXY (140,5);
	$pdf->Cell(10,55,'Cantitate', 0, 0, 'L');
	$pdf->SetXY (170,5);
	$pdf->Cell(10,55,'Data livrare',0, 0, 'L');
	$pdf->Line(10,40,200,40);
	$pdf->Ln(10);
	$y = 10;
	$pdf->SetFont('Arial','',12);
	
	   $conn=oci_connect("mihaela","veronica","localhost/XE");
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
					
			                $pdf->SetXY (15,$y);
							$pdf->Cell(10,73, $nume, 0, 0, 'L');
							$pdf->SetXY (50,$y);
							$pdf->Cell(10,73,$prenume,0, 0, 'L');
							$pdf->SetXY (90,$y);
							$pdf->Cell(10,73,$nume_parfum,0, 0, 'L');
							$pdf->SetXY (145,$y);
							$pdf->Cell(10,73,$cantitate,0, 0, 'L');
							$pdf->SetXY (170,$y);
							$pdf->Cell(10,73,$data,0, 0, 'L');
						    $y = $y + 10;
							if (($y + 10) >= 200) {
                                    $pdf->AddPage();
                                    $y = 15;	

									$pdf->Line(10,23,200,23);
									$pdf->Ln(13);
									$pdf->SetXY (15,5);
									$pdf->Cell(10,55,'Nume', 0, 0, 'L');
									$pdf->SetXY (90,5);
									$pdf->Cell(10,55,'Prenume', 0, 0, 'L');
									$pdf->SetXY (120,5);
									$pdf->Cell(10,55,'Parfum', 0, 0, 'L');
									$pdf->SetXY (165,5);
									$pdf->Cell(10,55,'Cantitate Vanduta', 0, 0, 'L');
									$pdf->Line(10,40,200,40);
									$pdf->Ln(10);
                          }
              }
	 $pdf->Output();
}
else
{
	echo 'not set';
}
?>