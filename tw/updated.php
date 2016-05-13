<?php
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	$user=$_POST['id_user'];
	$stid = oci_parse($conn,$sql);
    $r = oci_execute($stid);
	  if($r) 
                {
					oci_commit($conn);
                    echo 'trigger ok...<br>';
                }
                else
                {
					$m = oci_error($stid);
                    echo "Error Save [".$m['message']."]";
                    echo 'trigger not ok...<br>';
                }
    if(isset($_POST['id_user'])&&isset($_POST['username'])&&
    isset($_POST['password'])&&isset($_POST['nume'])&&
    isset($_POST['prenume'])&&isset($_POST['email'])&&
    isset($_POST['sex'])&&isset($_POST['oras'])&&isset($_POST['adresa']))
    {
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $oras = $_POST['oras'];
		$adresa = $_POST['adresa'];
		
        $sql = "UPDATE useri SET id_user='$id_user',username='$username',password='$password',nume='$nume',prenume='$prenume',email='$email',
								sex='$sex',oras='$oras',adresa='$adresa' WHERE id_user='$id_user'";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
                if($r) 
                {
					oci_commit($conn);
                    echo "<h2>Data is updated...</h2><br>";
                }
                else
                {
					$m = oci_error($stid);
                    echo "Error Save [".$m['message']."]";
                    echo 'Data is not updated...<br>';
                }
    }
	
	
	
//oci_close($conn);
?>
<li><a href="index.php"> Home</a></li>

