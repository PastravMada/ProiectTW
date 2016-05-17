<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
</head>
</body>
<?php
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	$id_det=$_GET['id'];

    if(isset($_POST['id_detalii'])&&isset($_POST['denumirePopulara'])&&
    isset($_POST['denumireStiintifica'])&&isset($_POST['descriere'])&&
    isset($_POST['origine'])&&isset($_POST['localizare'])&&
    isset($_POST['caracteristici'])&&isset($_POST['inmultire'])&&
	isset($_POST['beneficii'])&&isset($_POST['regimDezvoltare'])&&isset($_POST['perioadaCultivare'])&&isset($_POST['soiuriInrudite'])&&
	isset($_POST['culoare'])&&isset($_POST['temperatura'])&&isset($_POST['anotimp'])&&isset($_POST['descriereEngleza'])&&isset($_POST['descriereFranceza']))
    {
	    $id_detalii=$_POST['id_detalii'];
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
		$descriereFranceza=$_POST['descriereFranceza'];
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
		
        $sql = "UPDATE PLANTE SET id_planta=1,id_detalii=$id_detalii,denumirePopulara='$denumirePopulara',denumireStiintifica='$denumireStiintifica',
				imagine='$dir',descriere='$descriere' WHERE ID_DETALII='$id_det'";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
		$sql1= "UPDATE DETALII SET id_detalii=$id_detalii,origine='$origine',localizare='$localizare',caracteristici='$caracteristici',
				inmultire='$inmultire',imagini='$dir',beneficii='$beneficii',regimDezvoltare='$regimDezvoltare',perioadaCultivare='$perioadaCultivare',
				soiuriInrudite='$soiuriInrudite',culoare='$culoare',temperatura='$temperatura',anotimp='$anotimp',descriereEngleza='$descriereEngleza',
				descriereFranceza='$descriereFranceza' WHERE ID_DETALII='$id_det'";
                $stid1 = oci_parse($conn,$sql1);
                $r1 = oci_execute($stid1);
				
               if($r || $r1) 
                {
				   oci_commit($conn);
                   echo 'Informatiile au fost modificate.<br>';
                }
                else
                {
					$m = oci_error($stid);
                    echo 'Informatiile nu au fost modificate.<br>';
                }
    }
	
//oci_close($conn);
?>
</body>
</html>