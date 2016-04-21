<?php

require("fpdf/fpdf.php");

$pdf=new FPDF();

$pdf->SetFont('times','',18);
$pdf->SetTextColor(50,60,100);

$pdf->AddPage();

$pdf->SetXY (85,0);
$pdf->Line(10,23,200,23);
$pdf->Ln(13);
$pdf->SetXY (15,5);
$pdf->Cell(10,55,'Nume Parfum', 0, 0, 'L');
$pdf->SetXY (90,5);
$pdf->Cell(10,55,'Stoc', 0, 0, 'L');
$pdf->SetXY (120,5);
$pdf->Cell(10,55,'Sex', 0, 0, 'L');
$pdf->SetXY (165,5);
$pdf->Cell(10,55,'Pret', 0, 0, 'L');
$pdf->Line(10,40,200,40);
$pdf->Ln(10);
$y = 10;
$pdf->SetFont('Arial','I',12);
$conn=oci_connect("mihaela","veronica","localhost/XE");

         $sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,DESCRIERE,STOC,SEX FROM PARFUM';
        				$stid=oci_parse($conn, $sql);
        				oci_execute($stid);
        				while(oci_fetch($stid)){
        					$id_parfum=oci_result($stid, 'ID_PARFUM');
        					$nume_parfum=oci_result($stid,'NUME_PARFUM');
        					$pret=oci_result($stid, 'PRET');
							$stoc=oci_result($stid, 'STOC');
							$sex=oci_result($stid, 'SEX');
							$pdf->SetXY (15,$y);
							$pdf->Cell(10,73, $nume_parfum, 0, 0, 'L');
							$pdf->SetXY (90,$y);
							$pdf->Cell(10,73,$stoc,0, 0, 'L');
							$pdf->SetXY (120,$y);
							$pdf->Cell(10,73,$sex,0, 0, 'L');
							$pdf->SetXY (165,$y);
							$pdf->Cell(10,73,$pret.' lei',0, 0, 'L');
						    $y = $y + 10;
							if (($y + 10) >= 200) {
                                    $pdf->AddPage();
                                    $y = 15;	

									$pdf->Line(10,23,200,23);
									$pdf->Ln(13);
									$pdf->SetXY (15,5);
									$pdf->Cell(10,55,'Nume Parfum', 0, 0, 'L');
									$pdf->SetXY (90,5);
									$pdf->Cell(10,55,'Stoc', 0, 0, 'L');
									$pdf->SetXY (120,5);
									$pdf->Cell(10,55,'Sex', 0, 0, 'L');
									$pdf->SetXY (165,5);
									$pdf->Cell(10,55,'Pret', 0, 0, 'L');
									$pdf->Line(10,40,200,40);
									$pdf->Ln(10);
								}
						}

$pdf->Output();
print "complete";
?>