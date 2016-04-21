
<?php
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	
	$sql="CREATE OR REPLACE TRIGGER perfume_trigger
       BEFORE INSERT ON PARFUM  
       FOR EACH ROW
       BEGIN
          :NEW.id_parfum := name_of_sequence.NEXTVAL;
       END;";
	$stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);
	
    if(isset($_POST['nume_parfum'])&&isset($_POST['pret'])&&
    isset($_POST['bucati'])&&isset($_POST['sex'])&&
    isset($_POST['brand'])&&isset($_POST['gramaj'])&&
    isset($_POST['categorie'])&&isset($_POST['concentratie'])&&
    isset($_POST['ocazie'])&&isset($_POST['anotimp'])&&isset($_POST['ingrediente'])&&isset($_POST['descriere']))
    {
        $nume_parfum = $_POST['nume_parfum'];
        $pret = $_POST['pret'];
        $bucati = $_POST['bucati'];
        $sex = $_POST['sex'];
        $brand = $_POST['brand'];
        $gramaj = $_POST['gramaj'];
        $categorie = $_POST['categorie'];
        $concentratie = $_POST['concentratie'];
		$ocazie = $_POST['ocazie'];
		$anotimp = $_POST['anotimp'];
		$ingrediente = $_POST['ingrediente'];
		$descriere = $_POST['descriere']; 
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
		}
		$file_name=$_FILES['poza']['name'];
		$dir="../Poze/$file_name";
		
        $sql = "insert into PARFUM (id_parfum,nume_parfum,pret,stoc,sex,id_brand,gramaj,categorie,concentratie,ocazie,anotimp,poza,ingrediente,descriere) 
				values(1,'$nume_parfum',$pret,$bucati,'$sex',$brand,$gramaj,'$categorie','$concentratie','$ocazie','$anotimp','$dir','$ingrediente','$descriere')";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
               if($r) 
               {
					oci_commit($conn);
                   echo ' Perfume inserted...<br>';
                }
                else
                {
					$m = oci_error($stid);
                   // echo "Error Save ['.$m['message'].']";
                    echo 'data was not inserted...<br>';
                }
    }
	echo 'data inserted';
	
//oci_close($conn);
?>

