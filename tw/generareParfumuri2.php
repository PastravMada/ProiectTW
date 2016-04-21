<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareParfumuri.css">
</head>
<body>
	<?php include('Incluziuni/header.php');?>
	<section>
		<?php include('Incluziuni/aside.php');?>
		<article id="generareParfumuri">
			<?php
             if(isset($_GET['selectie'])){
				$valoare=$_GET['selectie'];
				$conn=oci_connect("mihaela","veronica","localhost/XE");
    			if(!$conn)
        			echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
        		else{
        				$sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,DESCRIERE FROM PARFUM WHERE ANOTIMP = :valoare AND SEX=:s';
        				$stid=oci_parse($conn, $sql);
                        $s='women';
        				oci_bind_by_name($stid, ':valoare', $valoare);
                        oci_bind_by_name($stid,':s',$s);
        				oci_execute($stid);
                        echo "<h2>Perfums of ".$valoare." for women</h2>";
        				while(oci_fetch($stid)){
        					$id_parfum=oci_result($stid, 'ID_PARFUM');
        					$nume_parfum=oci_result($stid,'NUME_PARFUM');
        					$pret=oci_result($stid, 'PRET');
        					$poza=oci_result($stid, 'POZA');
        					$descriere=oci_result($stid, 'DESCRIERE');

                            $stid3=oci_parse($conn, 'begin :r := pachet_proiect.verifica_stoc(:p); end;');
                            oci_bind_by_name($stid3, ':p', $id_parfum);
                            oci_bind_by_name($stid3,':r',$stoc,40);
                            oci_execute($stid3);
                            if($stoc>0){
            					echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
            					echo '<img class="image" src="'.$poza. '"/>';
                                echo '<p class="nume">'.$nume_parfum.'</p>';
            					echo '<p class="descriereParfum">'.$descriere.'</p>';
            					
									$sql3='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid3=oci_parse($conn, $sql3);
									oci_bind_by_name($stid3, ':id_parfum', $id_parfum);
									oci_execute($stid3);
									while(oci_fetch($stid3)){
										$discount=oci_result($stid3, 'DISCOUNT');
										echo "<p style='font-size:180%;color:red;' title='Reducere $discount % la parfumul $nume_parfum!!! ' '><b>PROMOTIE !!!</b></p>";
										echo "<br/>";
										echo "</a></div>";
									}
        			     	}
                        }
                        echo "<div class='delim'></div>";
                        $stid2=oci_parse($conn,$sql);
                        $s='men';
                        oci_bind_by_name($stid2, ':valoare', $valoare);
                        oci_bind_by_name($stid2, ':s', $s);
                        echo "<h2>Perfums of ".$valoare." for men</h2>";
                        oci_execute($stid2);
                        while(oci_fetch($stid2)){
                            $id_parfum=oci_result($stid2, 'ID_PARFUM');
                            $nume_parfum=oci_result($stid2,'NUME_PARFUM');
                            $pret=oci_result($stid2, 'PRET');
                            $poza=oci_result($stid2, 'POZA');
                            $descriere=oci_result($stid2, 'DESCRIERE');
                            echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
                            
                            echo '<img class="image" src="'.$poza. '"/>';
                            echo '<p class="nume">'.$nume_parfum.'</p>';
                            echo '<p class="descriereParfum">'.$descriere.'</p>';
                             
								$sql3='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid3=oci_parse($conn, $sql3);
									oci_bind_by_name($stid3, ':id_parfum', $id_parfum);
									oci_execute($stid3);
									while(oci_fetch($stid3)){
										$discount=oci_result($stid3, 'DISCOUNT');
										echo "<p style='font-size:180%;color:red;' title='Reducere $discount % la parfumul $nume_parfum !!! ' '><b>PROMOTIE !!!</b></p>";
										echo "<br/>";
										echo "</a></div>";
									}
                        }

        			}
        		oci_close($conn);
			}
            if(isset($_GET['cat'])){
                $val=$_GET['cat'];
               $conn=oci_connect("mihaela","veronica","localhost/XE");
                if(!$conn)
                    echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
                else{
                        $sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,DESCRIERE FROM PARFUM WHERE CATEGORIE = :valoare AND SEX=:s';

                        $stid=oci_parse($conn, $sql);
                        $s='women';
                        oci_bind_by_name($stid, ':valoare', $val);
                        oci_bind_by_name($stid, ':s', $s);
                        oci_execute($stid);
                        echo "<h2>Parfumuri ".$val. " pentru femei</h2>"; 
                        while(oci_fetch($stid)){
                            $id_parfum=oci_result($stid, 'ID_PARFUM');
                            $nume_parfum=oci_result($stid,'NUME_PARFUM');
                            $pret=oci_result($stid, 'PRET');
                            $poza=oci_result($stid, 'POZA');
                            $descriere=oci_result($stid, 'DESCRIERE');
                            echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
                            echo '<img class="image" src="'.$poza. '"/>';
                            echo '<p class="nume">'.$nume_parfum.'</p>';
                            echo '<p class="descriereParfum">'.$descriere.'</p>';
                           							
									$sql2='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid2=oci_parse($conn, $sql2);
									oci_bind_by_name($stid2, ':id_parfum', $id_parfum);
									oci_execute($stid2);
									while(oci_fetch($stid2)){
										$discount=oci_result($stid2, 'DISCOUNT');
										echo "<div align=left;><p style='font-size:180%;color:red;' title='Reducere $discount % la parfumul $nume_parfum !!! ' '><b>PROMOTIE !!!</b></p></div>";
										 echo '</a></div>';
									}                     
                        }				
				
                        echo "<div class='delim'></div>";
                        $stid2=oci_parse($conn, $sql);
                        $s='men';
                        oci_bind_by_name($stid2, ':valoare', $val);
                        oci_bind_by_name($stid2, ':s', $s);
                        oci_execute($stid2);
                        echo "<h2>Parfumuri ".$val." pentru barbati</h2>    ";
                        while(oci_fetch($stid2)){
                            $id_parfum=oci_result($stid2, 'ID_PARFUM');
                            $nume_parfum=oci_result($stid2,'NUME_PARFUM');
                            $pret=oci_result($stid2, 'PRET');
                            $poza=oci_result($stid2, 'POZA');
                            $descriere=oci_result($stid2, 'DESCRIERE');
                            echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
                            
                            echo '<img class="image" src="'.$poza. '"/>';
                            echo '<p class="nume">'.$nume_parfum.'</p>';
                            echo '<p class="descriereParfum">'.$descriere.'</p>';
							
								    $sql3='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid3=oci_parse($conn, $sql3);
									oci_bind_by_name($stid3, ':id_parfum', $id_parfum);
									oci_execute($stid3);
									while(oci_fetch($stid3)){
										$discount=oci_result($stid3, 'DISCOUNT');
										echo "<p style='font-size:180%;color:red;' title='Reducere $discount % la parfumul $nume_parfum!!! ' '><b>PROMOTIE !!!</b></p>";
										echo "<br/>";
										echo "</a></div>";
									} 
                        }
                }
                oci_close($conn);
            }
			if(isset($_GET['brand'])){
                $val=$_GET['brand'];
               $conn=oci_connect("mihaela","veronica","localhost/XE");
                if(!$conn)
                    echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
                else{
					 $sql2='SELECT ID_BRAND,NUME_BRAND,DETALII FROM BRANDS WHERE NUME_BRAND=:nume_brand';
				        $stid2=oci_parse($conn, $sql2);
				        oci_bind_by_name($stid2, ':nume_brand', $val);
				        oci_execute($stid2);
				        while(oci_fetch($stid2)){
				            $nume_brand=oci_result($stid2, 'NUME_BRAND');
				            $detalii=oci_result($stid2, 'DETALII');
							$id_brand=oci_result($stid2, 'ID_BRAND');
							}
						
                        $sql='SELECT ID_PARFUM,NUME_PARFUM,PRET,POZA,DESCRIERE FROM PARFUM WHERE ID_BRAND = :valoare AND SEX=:s';

                        $stid=oci_parse($conn, $sql);
                        $s='women';
                        oci_bind_by_name($stid, ':valoare', $id_brand);
                        oci_bind_by_name($stid, ':s', $s);
                        oci_execute($stid);
                        echo "<h2>Parfumuri ".$val. " pentru femei</h2>"; 
                        while(oci_fetch($stid)){
                            $id_parfum=oci_result($stid, 'ID_PARFUM');
                            $nume_parfum=oci_result($stid,'NUME_PARFUM');
                            $pret=oci_result($stid, 'PRET');
                            $poza=oci_result($stid, 'POZA');
                            $descriere=oci_result($stid, 'DESCRIERE');
                            echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
                            
                            echo '<img class="image" src="'.$poza. '"/>';
                            echo '<p class="nume">'.$nume_parfum.'</p>';
                            echo '<p class="descriereParfum">'.$descriere.'</p>';
							
								 $sql3='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid3=oci_parse($conn, $sql3);
									oci_bind_by_name($stid3, ':id_parfum', $id_parfum);
									oci_execute($stid3);
									while(oci_fetch($stid3)){
										$discount=oci_result($stid3, 'DISCOUNT');
										echo "<p style='font-size:180%;color:red;' title='Reduceere $discount % la parfumul $nume_parfum!!! ' '><b>PROMOTIE !!!</b></p>";
										echo "<br/>";
										echo "</a></div>";
									} 
                        }
                        echo "<div class='delim'></div>";
                        $stid2=oci_parse($conn, $sql);
                        $s='men';
                        oci_bind_by_name($stid2, ':valoare', $id_brand);
                        oci_bind_by_name($stid2, ':s', $s);
                        oci_execute($stid2);
                        echo "<h2>Parfumuri ".$val." pentru barbati</h2>    ";
                        while(oci_fetch($stid2)){
                            $id_parfum=oci_result($stid2, 'ID_PARFUM');
                            $nume_parfum=oci_result($stid2,'NUME_PARFUM');
                            $pret=oci_result($stid2, 'PRET');
                            $poza=oci_result($stid2, 'POZA');
                            $descriere=oci_result($stid2, 'DESCRIERE');
                            echo '<div class="unParfum"><a href=generareUnParfum.php?id='.$id_parfum.'>';
                            
                            echo '<img class="image" src="'.$poza. '"/>';
                            echo '<p class="nume">'.$nume_parfum.'</p>';
                            echo '<p class="descriereParfum">'.$descriere.'</p>';
							
                             $sql3='SELECT DISCOUNT FROM PROMOTII WHERE ID_PARFUM=:id_parfum AND DATA_INCEPUT<SYSDATE AND SYSDATE<DATA_SFARSIT';
									$stid3=oci_parse($conn, $sql3);
									oci_bind_by_name($stid3, ':id_parfum', $id_parfum);
									oci_execute($stid3);
									while(oci_fetch($stid3)){
										$discount=oci_result($stid3, 'DISCOUNT');
										echo "<p style='font-size:180%;color:red;' title='Reducere $discount % la parfumul $nume_parfum!!! ' '><b>PROMOTIE !!!</b></p>";
										echo "<br/>";
										echo "</a></div>";
									} 
                        }
                    }               
                oci_close($conn);
            }
			?>
		</article>
	</section>
</body>
</html>