<?php
?>
<html>
<head>
<title>Raport</title>
<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>
</head>
<body>
<?php

    if(isset($_POST['categorie']) && isset($_POST['sex']) && isset($_POST['d_start']) && isset($_POST['d_finish'])){
	$var=$_POST['categorie'];
	$var1=$_POST['sex'];
    $var2=$_POST['d_start'];
    $var3=$_POST['d_finish'];	
	$conn=oci_connect("mihaela","veronica","localhost/XE");
       $sql='SELECT NUME_PARFUM,PRET,SEX,CATEGORIE,CANTITATE,DATA_LIVRARE FROM PARFUM p,COMENZI c WHERE p.ID_PARFUM=c.ID_PARFUM AND p.CATEGORIE = :valoare AND p.SEX=:s
																AND c.DATA_LIVRARE > :val2 AND c.DATA_LIVRARE < :val3';
        	$stid=oci_parse($conn, $sql);
        		oci_bind_by_name($stid, ':valoare', $var);
                oci_bind_by_name($stid,':s',$var1);
				oci_bind_by_name($stid, ':val2', $var2);
                oci_bind_by_name($stid, ':val3', $var3);
        		oci_execute($stid);
	
		    echo "<table width='1200'>";
				echo "<th align=left width=200px;>Nume parfum</th>
					<th align=left width=200px;>Categorie</th>
					<th align=left width=200px;>Sex</th>
					<th align=left width=200px;>Cantitate</th>
					<th align=left width=200px;>Data start</th>
					<th align=left width=200px;>Data finish</th></tr>";
			echo "</table>";
	   while($row = oci_fetch_array($stid, OCI_BOTH)){

    echo "<table width='1200' border='1'>";

    echo "<tr><td align=left width=200px;>$row[0]</td>";
    echo  "<td align=left width=200px;>$row[3]</td>";
	echo  "<td align=left width=200px;>$row[2]</td>";
	echo  "<td align=left width=200px;>$row[4]</td>";
	echo  "<td align=left width=200px;>$var2</td>";
	echo  "<td align=left width=200px;>$var3</td></tr>";
    echo  "</table>";
}
	
//oci_close($conn);
}  

    if(isset($_POST['user'])){
		$var = $_POST['user'];
		
	   $conn=oci_connect("mihaela","veronica","localhost/XE");
       $sql='SELECT NUME,PRENUME,NUME_PARFUM,CANTITATE,DATA_LIVRARE FROM USERI u,COMENZI c,PARFUM p WHERE u.ID_USER=c.ID_USER AND c.ID_PARFUM=p.ID_PARFUM
									AND u.USERNAME = :valoare ORDER BY DATA_LIVRARE ASC';
	   
				$stid=oci_parse($conn, $sql);
        		oci_bind_by_name($stid, ':valoare', $var);
        		oci_execute($stid);
				echo "<table width='1200'>";
				echo "<th>Nume</th>
					 <th>Prenume</th>
					 <th>Nume parfum</th>
					 <th>Cantitate</th>
					 <th>Data livrare</th></tr>";
				echo "</table>";
			  while($row = oci_fetch_array($stid, OCI_BOTH)){

			echo "<table width='1200' border='1'>";			
			echo "<tr><td align=left width=200px;>$row[0]</td>";
			echo  "<td align=left width=200px;>$row[1]</td>";
			echo  "<td align=left width=200px;>$row[2]</td>";
			echo  "<td align=left width=200px;>$row[3]</td>";
			echo  "<td align=left width=200px;>$row[4]</td>";
			echo  "</table>";
    }
}
 ?>
</body>
</html>