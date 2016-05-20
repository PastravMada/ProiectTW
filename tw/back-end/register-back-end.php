<?php
function verify_errors($errno)
{
	if($errno == 20001)
		{echo "Logarea nu a fost realizata cu succes";
		phpAlert("Hello world! PHP has got an Alert Box");}
}
	session_start();
	if(isset($_SESSION['views']))
    	$_SESSION['views'] = $_SESSION['views']+ 1;
	else
    	$_SESSION['views'] = 1;

	if(!$_REQUEST["nume"]){
    	header("location: register.php?eroare=nume");
    }
    $nume=$_REQUEST["nume"];
    if(!$_REQUEST["prenume"]){
    	header("location: register.php?eroare=prenume");
    }
    $prenume=$_REQUEST["prenume"];

    if(!$_REQUEST["username"]){
    	header("location:register.php?eroare=username");
    }
    $username=$_REQUEST["username"];

    if(!$_REQUEST["password"]){
    	header("location:register.php?eroare=password");
    }
    $password=$_REQUEST["password"];

    if(!$_REQUEST["oras"]){
    	header("location:register.php?eroare=oras");
    }
    $oras=$_REQUEST["oras"];

    if(!$_REQUEST["adresa"]){
    	header("location:register.php?eroare=adresa");
    }
    $adresa=$_REQUEST["adresa"];

    if(!$_REQUEST["sex"]){
    	header("location:register.php?eroare=sex");
    }
    $sex=$_REQUEST["sex"];

    if(!$_REQUEST["telefon"]){
    	header("location:register.php?eroare=telefon");
    }
    $telefon=$_REQUEST["telefon"];
    
    
    $conn=oci_connect("mihaela","veronica","localhost/XE");


    if(isset($_POST['unume'])&&isset($_POST['prenume'])&&
    isset($_POST['usernamesignup'])&&isset($_POST['password'])&&
    isset($_POST['telefon'])&&isset($_POST['oras'])&&
    isset($_POST['adresa'])&&isset($_POST['sex']))
    {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $username = $_POST['usernamesignup'];
        $sex = $_POST['sex'];
        $password = $_POST['password'];
        $oras = $_POST['oras'];
        $telefon = $_POST['telefon'];
        $adresa = $_POST['adresa'];
		
		$stid = oci_parse($conn, "CALL userNameRegister('andreea','ion')");
		$r = oci_execute($stid);
		if (!$r) {
			$e = oci_error($stid);  // For oci_execute errors pass the statement handle
			verify_errors($e['code']);
		}
	else

    $sql2='SELECT ID_USER FROM USERI WHERE ID_USER=(SELECT MAX(ID_USER) FROM USERI)';
    $stid2=oci_parse($conn, $sql2);
    oci_execute($stid2);

    $id_user=0;
    while(oci_fetch($stid2)){
        $id_user=oci_result($stid2, 'ID_USER');
    }

		 $sql = "insert into USERI (id_user,username,password,nume,prenume,email,sex,oras,adresa,telefon) 
				values('$id_user','$username',$password,$nume,'$prenume','$email','$sex','oras','$adresa','$telefon')";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
                if($r) 
                {
					oci_commit($conn);
                    echo ' data is inserted...<br>';
                }
                else
                {
					$m = oci_error($stid);
                    echo "Error Save [".$m['message']."]";
                    echo 'data was not inserted...<br>';
                }
    
    oci_close($conn);
    ?>
