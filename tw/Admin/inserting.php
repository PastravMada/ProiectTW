
<?php
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	
	$sql="CREATE OR REPLACE TRIGGER flower_trigger
       BEFORE INSERT ON PLANTE  
       FOR EACH ROW
       BEGIN
          :NEW.id_planta := name_of_sequence.NEXTVAL;
       END;";
	$stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);

    if(isset($_POST['idDetalii'])&&isset($_POST['denumirePopulara'])&&
    isset($_POST['denumireStiintifica'])&&isset($_POST['descriere'])&&
    isset($_POST['origine'])&&isset($_POST['localizare'])&&
    isset($_POST['caracteristici'])&&isset($_POST['inmultire'])&&
	isset($_POST['beneficii'])&&isset($_POST['regimDezvoltare'])&&isset($_POST['perioadaCultivare'])&&isset($_POST['soiuriInrudite'])&&
	isset($_POST['culoare'])&&isset($_POST['temperatura'])&&isset($_POST['anotimp'])&&isset($_POST['descriereEngleza']))
    {
	    $id_detalii=$_POST['idDetalii'];
		$denumirePopulara=$_POST['denumirePopulara'];
		$denumireStiintifica=$_POST['denumireStiintifica'];
		$descriere=$_POST['descriere'];
		
		$origine=$_POST['origine'];
		$localizare=$_POST['localizare'];
		$caracteristici=$_POST['caracteristici'];
		$inmultire=$_POST['inmultire'];
		$beneficii=$_POST['beneficii'];
		$regimDezvoltare=$_POST['regimDezvoltare'];
		$perioadaCultivare=$_POST['perioadaCultivare'];
		$soiuriInrudite=$_POST['soiuriInrudite'];
		$culoare=$_POST['culoare'];
		$temperatura=$_POST['temperatura'];
		$anotimp=$_POST['anotimp'];
		$descriereEngleza=$_POST['descriereEngleza'];

		if(isset($_POST['imagini'])){
			$file_upload="true";
		    $file_size=$_FILES['imagini']['size'];
		    if (!($_FILES['imagini']['type'] =="image/jpeg" OR $_FILES['imagini']['type'] =="image/gif"))
		    {
		        $msg=$msg."Your uploaded file must be of JPG or GIF. Other file types are not allowed<BR>";
		        $file_upload="false";
		    }
		    $file_name=$_FILES['imagini']['name'];
		    $dir="../Imagini/$file_name";
		    if($file_upload=="true"){
		        if(move_uploaded_file($_FILES['imagini']['tmp_name'], $dir)){
		            echo "Fisier uploadat cu succes";
		        }
		        else
		            echo "Fisierul nu s-a uploadat";
		    }
		    else{
		        echo $msg;
		    }
		}
		$file_name=$_FILES['imagini']['name'];
		$dir="../Imagini/$file_name";
		
        $sql = "insert into PLANTE (id_planta,id_detalii,denumirePopulara,denumireStiintifica,imagine,descriere) 
				values(1,$id_detalii,'$denumirePopulara','$denumireStiintifica','$dir','$descriere')";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
		$sql1= "insert into DETALII (id_detalii,origine,localizare,caracteristici,inmultire,imagini,beneficii,regimDezvoltare,perioadaCultivare,
				soiuriInrudite,culoare,temperatura,anotimp,descriereEngleza) values($id_detalii,'$origine','$localizare','$caracteristici','$inmultire',
				'$dir','$beneficii','$regimDezvoltare','$perioadaCultivare','$soiuriInrudite','$culoare','$temperatura','$anotimp','$descriereEngleza')";
                $stid1 = oci_parse($conn,$sql1);
                $r1 = oci_execute($stid1);
				
               if($r || $r1) 
                {
				   oci_commit($conn);
                   echo 'Floare inserata in baza de date...<br>';
                }
                else
                {
					$m = oci_error($stid);
                    echo 'Informatiile nu au fost inserate...<br>';
                }
    }
	
//oci_close($conn);
?>

