<!DOCTYPE html>
<?php 
	$conn=oci_connect("mihaela","veronica","localhost/XE");	
?>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
</head>
<body>
	<?php include('IncluziuniAdmin/headerAdmin.php');?>
	
	<div id="addAdmin">
	<?php
		
	if($format=='DA'){
    isset($_POST['username']))
    {
        $username = $_POST['username'];
        $sql = "UPDATE useri SET username='$username' WHERE username='$username'";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
                if($r) 
                {
					oci_commit($conn);
                    echo "<h2>Ai devenit admin!</h2><br>";
                }
                else
                {
					$m = oci_error($stid);
                    echo "Error Save [".$m['message']."]";
                    echo 'Data is not updated...<br>';
                }
    }

?>
<li><a href="Admin/admin.php">Pagina Admi</a></li>
	}
	</div>
</body>
</html>
