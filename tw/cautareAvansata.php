<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="Incluziuni/incluziuni.css">
	<link rel="stylesheet" type="text/css" href="css/generareParfumuri.css">
</head>
<body>
<script>
 function changeOption(obj){
        var xmlhhtp;
        var categ=obj.options[obj.selectedIndex];
        var value=categ.value;
        	if(categ.value!=""){
        		if(window.XMLHttpRequest){
        			xmlhhtp=new XMLHttpRequest();
        		}else{
        			xmlhhtp=new ActiveXObject("Microsoft.XMLHTTP");
        		}
        		xmlhhtp.onreadystatechange=function(){
        			if(xmlhhtp.readyState==4 && xmlhhtp.status==200){
        				document.getElementById("status1").innerHTML=xmlhhtp.responseText;
        			}
        		};
        	xmlhhtp.open("GET","drop.php?categ="+encodeURIComponent(categ.value),true);
        	xmlhhtp.send();
		}
  };
</script>
	<?php include('Incluziuni/header.php');?>
    <article id="generareParfumuri">	
			<?php
			$conn=oci_connect("mihaela","veronica","localhost/XE");
			if(!$conn)
        		echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
        	else{
        		$sql='SELECT * FROM DETALII';
						
				$stid=oci_parse($conn, $sql);
				oci_execute($stid);
			?>
				<select onChange="changeOption(this)">
				<?php
        			while(oci_fetch($stid)){
						if (empty($stid)){
							echo "empty";
						}
        				$anotimp=oci_result($stid,'ANOTIMP');
						echo $anotimp;
				?>				
				<option value="<?php echo $anotimp;?>" > 
				<?php echo $anotimp;?> </option> 
				<?php } ?>
				</select>					
                <?php									
				}
        oci_close($conn);			
?>
<span id="status1"></span>
</article>
</body>
</html>
