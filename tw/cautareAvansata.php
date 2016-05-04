<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareFlori.css">
	<script src="functions.js" type="text/javascript"></script>
</head>
<body>
	<?php include('Incluziuni/header.php');include('Incluziuni/aside.php');?>
    <article id="generareFlori">	
			<?php
			$conn=oci_connect("mihaela","veronica","localhost/XE");
			if(!$conn)
        		echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
        	else{
        		$sql='SELECT * FROM DETALII';
						
				$stid=oci_parse($conn, $sql);
				oci_execute($stid);

			?>
				<select id="s1" onChange="changeSeason(this)">
				<?php
				$array=array(" ");
        			while(oci_fetch($stid)){
        			$anotimp=oci_result($stid,'ANOTIMP');
						if(in_array( $anotimp ,$array ) )
							{continue;}
						else
							{array_push($array, $anotimp);}
				?>				
				<option value="<?php echo $anotimp;?>" > 
				<?php echo $anotimp;?> </option> 
				<?php } ?>
				</select>	

				<select id="s2" onChange="changeOrigin(this)">
				<?php
				$stid=oci_parse($conn, $sql);
				oci_execute($stid);
				$array=array(" ");
        			while(oci_fetch($stid)){
					$origine=oci_result($stid, 'ORIGINE');
						if(in_array( $origine ,$array ) )
							{continue;}
						else
							{array_push($array, $origine);}
				?>				
				<option value="<?php echo $origine;?>" > 
				<?php echo $origine;?> </option> 
				<?php } ?>
				</select>
                <?php									
				}
        oci_close($conn);			
?>
</br></br>
<span id="status1"></span>
</article>
</body>
</html>
