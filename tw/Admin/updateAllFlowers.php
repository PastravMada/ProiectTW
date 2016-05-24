<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
	<script src="functionsAdmin.js"></script>
</head>
<body>
    <?php include('IncluziuniAdmin/headerAdmin.php');?>
		<article>
			<?php
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
								
								echo "<div style='display:inline-block;margin-left:115px;'><a href=updateFlower.php?id=".$id_detalii.">";
								echo "<div align='center'>";
								echo "<p style='font-size:180%;color:red;'>".ucwords($denumire)."</p>";
								echo '<img  style="height:200px;width:300px;" src="'.$imagine. '"/>';
								echo "</div>";
								echo "</a></div>";	
						}						
                     }							
	    oci_close($conn);
		}
			?>
		</article>
</body>
</html>
