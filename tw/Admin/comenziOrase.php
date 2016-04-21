<html>
<head><title>Comenzi</title>
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
<body>
	<?php
		include('IncluziuniAdmin/headerAdmin.php'); 
		?>
		<p style='text-align:center;'>Alegeti orasul:</p>
		<?php 
			$conn=oci_connect("mihaela","veronica","localhost/XE");
			$sql='SELECT UNIQUE ORAS FROM USERI';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$oras=oci_result($stid, 'ORAS');
				echo "<div id='orase'><a href='back-endComenzi.php?oras=".$oras."'>".$oras."</a></div>";
			}
		?>

</body>
</html>