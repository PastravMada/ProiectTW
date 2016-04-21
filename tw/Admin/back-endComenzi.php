<?php
	ini_set("memory_limit","512M");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comenzi</title>
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
<body>
<?php
		include('IncluziuniAdmin/headerAdmin.php');
		
		$opt=$_GET['oras'];
		$conn=oci_connect("mihaela","veronica","localhost/XE");
		if(!$conn){
			echo('Eroare la conecxiunea cu DB Oracle');
		}else{
			//$sql='SELECT NUME,PRENUME,EMAIL,ORAS,TIP_PLATA,DATA_LIVRARE FROM USERI u LEFT OUTER JOIN COMENZI c ON u.id_user=c.id_user and ORAS=:optiune';
			$sql='SELECT NUME,PRENUME,EMAIL,ORAS,DATA_LIVRARE FROM USERI u, COMENZI c WHERE u.ID_USER=c.ID_USER AND ORAS=:optiune';
			$stid=oci_parse($conn, $sql);
			oci_bind_by_name($stid, ':optiune', $opt);
			oci_execute($stid,OCI_DEFAULT);
			$Num_rows=oci_fetch_all($stid, $rez);
			if($Num_rows==0){
				echo "Nu s-a gasit nici o comanda din orasul ".$opt;
			}
			$Per_Page=3;

			if(!isset($_GET["Page"])){
				$Page=1;
			}else{
				$Page=$_GET["Page"];
			}
			$Prev_Page=$Page-1;
			$Next_Page=$Page+1;

			$Page_Start=(($Per_Page*$Page)-$Per_Page);
			if($Num_rows<=$Per_Page){
				$Num_Pages=1;
			}
			else if(($Num_rows%$Per_Page)==0){
				$Num_Pages=($Num_rows/$Per_Page);
			}else{
				$Num_Pages=($Num_rows/$Per_Page)+1;
				$Num_Pages=(int)$Num_Pages;	
			}
			$Page_end=$Per_Page*$Page;
			if($Page_end>$Num_rows){
				$Page_end=$Num_rows;
			}

			echo "<table border=\"1\">\n";
			echo "<tbody>";
			echo "<tr>";
			$Num_cols=oci_num_fields($stid);
			for($i=1; $i<=$Num_cols; $i++){
				$column_name=oci_field_name($stid, $i);
				
				echo "<th>".$column_name."</th>";
			}
			echo "</tr>";
				for($i=$Page_Start;$i<$Page_end;$i++){
				echo "<tr>";
				for($j=1;$j<=$Num_cols;$j++){
					$column_name=oci_field_name($stid,$j);
					echo "<th>".$rez[$column_name][$i]."</th>";
				}
				echo "</tr>";
				}
			
			echo "</table>";
			echo "<br>";
			echo "Total = ".$Num_rows." Record = ".$Num_Pages."    Page :";
			if($Prev_Page){
				echo "<a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&oras=$opt'><<Back</a>";
			}
			for($i=1;$i<=$Num_Pages;$i++){
				if($i != $Page){
					echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&oras=$opt'>$i</a>";
				}else{
					echo "<b>$i</b>";
				}
			}
			if($Page!=$Num_Pages){
				echo "<a href='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&oras=$opt'>Next>></a>";
			}
		}
		oci_close($conn);
	?>
</body>
</html>