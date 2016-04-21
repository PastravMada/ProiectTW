<?php 
	if(!$_REQUEST["nume_parfum"]){
    	header("location: insertParfum.php?eroare=nume");
    }
    $nume=$_REQUEST["nume_parfum"];
    if(!$_REQUEST["brand"]){
    	header("location:insertParfum.php?eroare=brand");
    }
    $brand=$_REQUEST["brand"];
    if(!$_REQUEST["pret"]){
    	header("location:insertParfum.php?eroare=pret");
    }
    $pret=$_REQUEST["pret"];
    if(!$_REQUEST["bucati"]){
    	header("location:insertParfum.php?eroare=bucati");
    }
    $bucati=$_REQUEST["bucati"];
    if(!$_REQUEST["gramaj"]){
    	header("location:insertParfum.php?eroare=gramaj");
    }
    $gramaj=$_REQUEST["gramaj"];
    if(!$_REQUEST["categorie"]){
    	header("location:insertParfum.php?eroare=categorie");
    }
    $categorie=$_REQUEST["categorie"];
    if(!$_REQUEST["ocazie"]){
    	header("location:insertParfum.php?eroare=ocazie");
    }
    $ocazie=$_REQUEST["ocazie"];
    if(!$_REQUEST["descriere"]){
    	header("location:insertParfum.php?eroare=descriere");
    }
    $descriere=$_REQUEST["descriere"];
    
    $file_upload="true";
    $file_size=$_FILES['poza']['size'];
    echo $_FILES['poza']['name'];
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
    $conn=oci_connect("mihaela","veronica","localhost/XE");
    $sql1='SELECT ID_BRAND FROM BRANDS WHERE NUME_BRAND=:brand';
    $stid1=oci_parse($conn, $sql1);
    oci_bind_by_name($stid1, ':brand', $brand);
    oci_execute($stid1);
    $id_brand="";
    while(oci_fetch($stid1)){
        $id_brand=oci_result($stid1, 'ID_BRAND');
    }
    echo $id_brand;

    $sql2='SELECT ID_PARFUM FROM PARFUM WHERE ID_PARFUM=(SELECT MAX(ID_PARFUM) FROM PARFUM)';
    $stid2=oci_parse($conn, $sql2);
    oci_execute($stid2);

    $id_parfum=0;
    while(oci_fetch($stid2)){
        $id_parfum=oci_result($stid2, 'ID_PARFUM');
    }
    echo $id_parfum;
    
    oci_close($conn);
    ?>