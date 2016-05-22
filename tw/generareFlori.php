<!DOCTYPE html>
<html>
<head>
	<meta Http-Equiv="Content-Type" Content ="text/html; Charset=UTF-8">
	<link rel="shortcut icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareFlori.css">
	<link rel="stylesheet" href="Admin/cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="Admin/cssMenu/menu.css" type="text/css" media="screen">
</head>
<body background="back1.jpg">
	<?php include('Incluziuni/header.php');?>
	<section>
		<?php include('Incluziuni/aside.php');?>
		<article id="generareFlori">
			<?php
            if(isset($_GET['anotimp'])){
			$valoare=$_GET['anotimp'];
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
												
						$sql1='SELECT * FROM PLANTE WHERE ID_DETALII=:valoare';
						$stid1=oci_parse($conn, $sql1);
						oci_bind_by_name($stid1, ':valoare', $id_detalii);
						oci_execute($stid1);
							while(oci_fetch($stid1)){
								$descriere=oci_result($stid1, 'DESCRIERE');
								$denumire=oci_result($stid1, 'DENUMIREPOPULARA');
								$imagine=oci_result($stid1, 'IMAGINE');
								echo '<br><br>';
								echo '<div ><a href=generareFloare.php?id='.$id_detalii.'>';
								echo '<div align="center">';
								echo "<p style='font-size:180%;color:red;'>".ucwords($denumire)."</p>'";
								echo '<img  style="height:400px;width:530px;" src="'.$imagine. '"/>';
								echo '</div>';
								echo '<p>'.($descriere).'</p>';
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