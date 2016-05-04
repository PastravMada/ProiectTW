<?php
	session_start();
	if(isset($_SESSION['views']))
    	$_SESSION['views'] = $_SESSION['views']+ 1;
	else
    	$_SESSION['views'] = 1;

    

    if(!$_REQUEST["username"]){
    	header("location: login.php");
    }
    $username=$_REQUEST["username"];
    if(!$_REQUEST["password"]){
    	header("location:login.php");
    }
    $password=$_REQUEST["password"];


    $conn=oci_connect("mihaela","veronica","localhost/XE");

    if(!$conn)
        echo ("EROARE LA CONEXIUNEA CU ORACLE DB");
 else{
    $sql='CREATE UNIQUE INDEX index_user ON USERI(USERNAME)';
    $stid=oci_parse($conn, $sql);
    oci_execute($stid);
    $sql='SELECT USERNAME, PASSWORD FROM USERI';
    $stid=oci_parse($conn,$sql);
    oci_execute($stid);
    $gasit=0;
    while(oci_fetch($stid)){
      if(oci_result($stid, 'USERNAME')==$username  && oci_result($stid, 'PASSWORD')==$password){
        $gasit=1;
        break;
      }
    }
    
    if($gasit==0){
    	header("location: ../index.php");
    }
    else{
        if(isset($_REQUEST['remember'])){
            setcookie('username',$username, time() + 10*24*60*60);
            setcookie('password',$password, time() + 10*24*60*60);
        }
        else{
            setcookie('username', '', time() - 10*24*60*60);
            setcookie('password', '', time() - 10*24*60*60);
        }
        $_SESSION['login_user']=$username;
        if($username=="admin"){
        	header("location: ../Admin/admin.php");
        }
        else{
        header("location: ../cautareAvansata.php");
    		}
      }
  

oci_close($conn);}
?>