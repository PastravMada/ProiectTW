<?php
	$conn=oci_connect("mihaela","veronica","localhost/XE");
	if(isset($_POST['nume'])&&isset($_POST['prenume'])&&
    isset($_POST['usernamesignup'])&&isset($_POST['password'])&&
    isset($_POST['telefon'])&&isset($_POST['oras'])&&
    isset($_POST['adresa'])&&isset($_POST['sex'])&&isset($_POST['email']))
    {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $username = $_POST['usernamesignup'];
        $sex = $_POST['sex'];
        $password = $_POST['password'];
        $oras = $_POST['oras'];
        $telefon = $_POST['telefon'];
        $adresa = $_POST['adresa'];
        $email=$_POST['email'];

        $sql='SELECT MAX(ID_USER) FROM USERI';
        $stid=oci_parse($conn,$sql);
        oci_execute($stid);
        while(oci_fetch($stid)){
        	$id_user=oci_result($stid, 'MAX(ID_USER)');
        }
        $id_user=$id_user+1;
        
        $sql="INSERT INTO USERI VALUES('$id_user','$username','$password','$nume','$prenume','$email','$sex','$oras','$adresa','$telefon')";
    	$stid=oci_parse($conn, $sql);
    	oci_execute($stid);

    	header('location: ../login.php?message=register');
    }
?>