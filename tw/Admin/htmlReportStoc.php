<!DOCTYPE html>
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
<table width="900">
	<tr><th align=left width=200px;>Nume Parfum</th>
	<th>Stoc</th>
	<th>Sex</th>
	<th>Pret</th></tr>
</table>
<?php
	$conn=oci_connect("mihaela","veronica","localhost/XE");
       $sql='SELECT ID_PARFUM,NUME_PARFUM,STOC,SEX,PRET FROM PARFUM';
        	$stid=oci_parse($conn, $sql);
        		oci_execute($stid);
?>

	<?php		
	    while($row = oci_fetch_array($stid, OCI_BOTH)){
  ?>
<table width="900" border="1">
    <tr><td align=left width=200px;><?=$row[1];?></td>
    <td align=left width=200px;><?=$row[2];?></td>
	<td align=left width=200px;><?=$row[3];?></td>
	<td align=left width=200px;><?=$row[4];?></td></tr>
</table>
<?php }
?>

</body>
</html>