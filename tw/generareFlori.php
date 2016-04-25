<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareFlori.css">

</head>
<body>
	<?php include('Incluziuni/header.php');?>
	<section>
		<?php include('Incluziuni/aside.php');?>
		<article id="generareFlori">
			<?php
            // if(isset($_GET['selectie'])){
			//	$valoare=$_GET['selectie'];
				$conn=oci_connect("mihaela","veronica","localhost/XE");
    			if(!$conn)
        			echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
        		else{
					$sql='SELECT * FROM PLANTE';
					$stid=oci_parse($conn, $sql);
					oci_execute($stid);						
                    while(oci_fetch($stid)){
                        $id_planta=oci_result($stid, 'ID_DETALII');
        				$imagine=oci_result($stid, 'IMAGINE');
						$descriere=oci_result($stid, 'DESCRIERE');

                        echo '<div class="unParfum"><a href=generareFloare.php?id='.$id_planta.'>';
						echo '<div align="center">';
            			echo '<img  style="height:400px;width:600px;" src="'.$imagine. '"/>';
						echo '</div>';
						echo '<p class="descriereParfum">'.$descriere.'</p>';
						echo "</a></div>";						
                     }												
        		}
        		oci_close($conn);
		//	}
			?>
		</article>
	</section>
</body>
</html>