<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<link rel="stylesheet" href="Admin/cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="Admin/cssMenu/menu.css" type="text/css" media="screen">
</head>
<body background="back1.jpg">
	<?php include('Incluziuni/header.php');
	      include('Incluziuni/aside.php');?>
		<article id="home">
			<?php
			$counter=0;
			$conn=oci_connect("mihaela","veronica","localhost/XE");
				if(!$conn)
					echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
				else{
					$sql='SELECT * FROM DETALII';
					$stid=oci_parse($conn, $sql);
					oci_execute($stid);            
                    while(oci_fetch($stid)){
                        $id_detalii=oci_result($stid, 'ID_DETALII');       				
												
						$sql1='SELECT * FROM PLANTE WHERE ID_DETALII=:valoare';
						$stid1=oci_parse($conn, $sql1);
						oci_bind_by_name($stid1, ':valoare', $id_detalii);
						oci_execute($stid1);
							while(oci_fetch($stid1)){
								$denumire=oci_result($stid1, 'DENUMIREPOPULARA');
								$imagine=oci_result($stid1, 'IMAGINE');
								
							echo "<div style='display:inline-block;margin-left:65px;'><a href=generareFloare.php?id=".$id_detalii.">";
							echo "<div align='center'>";
							echo "<p style='font-size:180%;color:red;'>".ucwords($denumire)."</p>";
							echo '<img  style="height:200px;width:300px;" src="'.$imagine. '"/>';
							echo "</div>";
							echo "</a></div>";	
							
							$counter++;
							if($counter>9){
								exit;
							}
						}						
                     }							
	    oci_close($conn);
		}
	?>
		</article>
</body>
</html>
