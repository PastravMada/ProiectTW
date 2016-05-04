<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
</body>
<?php
    
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	
	$id_parfum=$_GET['id_parfum'];
	
	 if(!$conn)
        echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
   else{
    $sql='SELECT ID_PARFUM FROM PARFUM';
    $stid=oci_parse($conn,$sql);
    oci_execute($stid);
    $gasit=0;
    while(oci_fetch($stid)){
      if(oci_result($stid, 'ID_PARFUM')==$id_parfum){
        $gasit=1;
        break;
      }
    }  
    include('IncluziuniAdmin/headerAdmin.php');
    if($gasit==0){
    	echo '<h3>Parfumul a fost sters !</h3>';
    }
    else{
	
	if(isset($_POST['nume_parfum'])&&isset($_POST['pret'])&&isset($_POST['stoc'])&&isset($_POST['nume_brand'])&&isset($_POST['categorie'])&&isset($_POST['ocazie'])&&isset($_POST['anotimp'])&&isset($_POST['ingrediente'])&&isset($_POST['descriere'])){
		$nume_parfum=$_POST['nume_parfum'];
		$pret=$_POST['pret'];
		$stoc=$_POST['stoc'];
		$nume_brand=$_POST['nume_brand'];
		$categorie=$_POST['categorie'];
		$ocazie=$_POST['ocazie'];
		$anotimp=$_POST['anotimp'];
		$ingrediente=$_POST['ingrediente'];
		$descriere=$_POST['descriere'];
		if(isset($_POST['poza'])){
			$file_upload="true";
		    $file_size=$_FILES['poza']['size'];
		    if (!($_FILES['poza']['type'] =="image/jpeg" OR $_FILES['poza']['type'] =="image/gif"))
		    {
		        $msg=$msg."Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
		        $file_upload="false";
		    }
		    $file_name=$_FILES['poza']['name'];
		    $dir="../Poze/$file_name";
		    if($file_upload=="true"){
		        if(move_uploaded_file($_FILES['poza']['tmp_name'], $dir)){
		            echo "fisier uploadat cu succes";
		        }
		        else
		            echo "fisierul nu s-a uploadat";
		    }
		    else{
		        echo $msg;
		    }
		   
		    $sql="UPDATE PARFUM SET POZA='$dir' WHERE ID_PARFUM='$id_parfum'";
		    $stid=oci_parse($conn, $sql);
		    oci_execute($stid);
		}
		$sql="SELECT ID_BRAND FROM BRANDS WHERE NUME_BRAND='$nume_brand'";
		$stid=oci_parse($conn, $sql);
		oci_execute($stid);
		while(oci_fetch($stid)){
			$id_brand=oci_result($stid, 'ID_BRAND');
		}
		$sql="UPDATE PARFUM SET NUME_PARFUM='$nume_parfum',PRET='$pret',ID_BRAND='$id_brand', STOC='$stoc',CATEGORIE='$categorie',OCAZIE='$ocazie',ANOTIMP='$anotimp',INGREDIENTE='$ingrediente',DESCRIERE='$descriere' WHERE ID_PARFUM='$id_parfum'";
		$stid=oci_parse($conn, $sql);		
		oci_execute($stid);
		oci_commit($conn);
		echo "<h2 style='color:black;'>Datele au fost modificate</h2>";
	}
    }
oci_close($conn);
}
	
?>
</body>
</html>