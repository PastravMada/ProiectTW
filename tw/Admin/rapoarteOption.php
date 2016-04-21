<!DOCTYPE html>
<?php 
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	
?>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	
	<?php
	$format = isset($_GET['format']) ? $_GET['format'] : "";
	echo "<h2 align=center style='color:black;'>Vizualizare rapoarte in format $format</h2>";
		
	if($format=='PDF'){
		echo "<section align=center>";
		echo "<div><a href='pdfReportStoc.php'>Stoc parfumuri</a></div>";	
		echo "<h4>Situatie vanzari</h4>";
        echo "<form method='post' action='pdfReport.php'>";
		echo "<select name='categorie'><option>Categorie</option>";
			$sql='SELECT UNIQUE CATEGORIE FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$categorie=oci_result($stid, 'CATEGORIE');
				echo "<option value='".$categorie."'>".$categorie."</option>";
			}
		echo "</select>";

		echo "<select name='sex'><option>Profil</option>";
			$sql='SELECT UNIQUE SEX FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$sex=oci_result($stid, 'SEX');
				echo "<option value='".$sex."'>".$sex."</option>";
			}
		echo "</select>";
		
			echo "<select name='d_start'><option>Data start</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_start=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_start."'>".$d_start."</option>";
			}
		echo "</select>";
		
		echo "<select name='d_finish'><option>Data finish</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_finish=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_finish."'>".$d_finish."</option>";
			}
		echo "</select>";
		
		echo "<input type='submit' value='Raport'/>";
		echo "</form>";	
		
		echo "<h4>Vezi cate parfumuri a cumparat user-ul :</h4>";
		echo "<form method='post' action='pdfReport.php'>";
		echo "<select name='user'><option>User</option>";
			$sql='SELECT USERNAME FROM USERI';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$user=oci_result($stid, 'USERNAME');
				echo "<option value='".$user."'>".$user."</option>";
			}
		echo "</select>";
				
		echo "<input type='submit' value='Raport'/>";
		echo "</form>";
			
		echo "</section>";
	}
	else if($format=='HTML'){
		echo "<section align=center>";
		echo "<div><a href='htmlReportStoc.php'>Stoc Parfumuri</a></div>";
		echo "<h4>Situatie vanzari</h4>";
		echo "<form method='post' action='htmlReport.php'>";
		echo "<select name='categorie'><option>Categorie</option>";
			$sql='SELECT UNIQUE CATEGORIE FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$categorie=oci_result($stid, 'CATEGORIE');
				echo "<option value='".$categorie."'>".$categorie."</option>";
			}
		echo "</select>";

		echo "<select name='sex'><option>Profil  </option>";
			$sql='SELECT UNIQUE SEX FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$sex=oci_result($stid, 'SEX');
				echo "<option value='".$sex."'>".$sex."</option>";
			}
		echo "</select>";
		
		echo "<select name='d_start'><option>Data start</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_start=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_start."'>".$d_start."</option>";
			}
		echo "</select>";
		
		echo "<select name='d_finish'><option>Data finish</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_finish=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_finish."'>".$d_finish."</option>";
			}
		echo "</select>";
		
		echo "<input type='submit' value='Raport'/>";
		echo "</form>";
		
		echo "<h4>Vezi cate parfumuri a cumparat user-ul :</h4>";
		echo "<form method='post' action='htmlReport.php'>";
		echo "<select name='user'><option>User</option>";
			$sql='SELECT USERNAME FROM USERI';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$user=oci_result($stid, 'USERNAME');
				echo "<option value='".$user."'>".$user."</option>";
			}
		echo "</select>";
		echo "<input type='submit' value='Raport'/>";
		echo "</form>";
		
		echo "</section>";
	}
	else if($format=='CSV'){
		echo "<section align=center>";
		echo "<div><a href='csvReportStoc.php'>Stoc Parfumuri</a></div>";	
		echo "<h4>Situatie vanzari</h4>";
		echo "<form method='post' action='csvReport.php'>";
		echo "<select name='categorie'><option>Categorie</option>";
			$sql='SELECT UNIQUE CATEGORIE FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$categorie=oci_result($stid, 'CATEGORIE');
				echo "<option value='".$categorie."'>".$categorie."</option>";
			}
		echo "</select>";

		echo "<select name='sex'><option>Profil  </option>";
			$sql='SELECT UNIQUE SEX FROM PARFUM';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$sex=oci_result($stid, 'SEX');
				echo "<option value='".$sex."'>".$sex."</option>";
			}
		echo "</select>";
		
				
		echo "<select name='d_start'><option>Data start</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_start=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_start."'>".$d_start."</option>";
			}
		echo "</select>";
		
		echo "<select name='d_finish'><option>Data finish</option>";
			$sql='SELECT UNIQUE DATA_LIVRARE FROM COMENZI ORDER BY DATA_LIVRARE ASC';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$d_finish=oci_result($stid, 'DATA_LIVRARE');
				echo "<option value='".$d_finish."'>".$d_finish."</option>";
			}
		echo "</select>";
		
		echo "<input id='deleteParfumButton' type='submit' value='Raport'/>";
		echo "</form>";
		
		echo "<h4>Vezi cate parfumuri a cumparat user-ul :</h4>";
		echo "<form method='post' action='csvReport.php'>";
		echo "<select name='user'><option>User</option>";
			$sql='SELECT USERNAME FROM USERI';
			$stid=oci_parse($conn, $sql);
			oci_execute($stid);
			while(oci_fetch($stid)){
				$user=oci_result($stid, 'USERNAME');
				echo "<option value='".$user."'>".$user."</option>";
			}
		echo "</select>";
	
		echo "<input type='submit' value='Raport'/>";
		echo "</form>";
		
		echo "</section>";
	}
	?>
</body>
</html>