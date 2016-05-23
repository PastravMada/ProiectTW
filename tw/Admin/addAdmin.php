

<?php
$c1 = oci_connect("mihaela", "veronica", 'localhost/XE');
$username = isset($_POST['username']) ? $_POST['username'] : '';
?>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
	
    <title>Add admin</title>
    <link href="admin1.css" rel="stylesheet">
</head>
<body>
<?php include('IncluziuniAdmin/headerAdmin.php');?>
<table width="50%" border="0" cellpadding="0" cellspacing="2">
<form name="register_form" method="post">   
	 <div id="main" class="container1">
       <h2>Username-ul introdus de dumneavoastra va fi admin:</h2>
	   <div class="container1" >
           <tr> <tr><h2>Username
            <input type="text" name="username" id="username" /></h2></tr>
			<br/>
          <tr><h3 >Sunteti sigur?
		  
    <input type="checkbox" name="formWheelchair" value="Yes" /></h3></tr>
	<br/>
            <tr><input  type="submit" name="btn_i" id="button" value="Adauga" style="display: block; margin: 0 auto;"/></tr><tr>
			</div>
       </div>
   </table>
</form>
<?php 
function update($connname, $conn)
{ 	if(isset($_POST['username'])){
	$username = $_POST['username'];
		$strSQL = "UPDATE Useri SET username='Admin' WHERE username= '$username' ";
    $stmt = oci_parse($conn, $strSQL);
    $r=oci_execute($stmt, OCI_DEFAULT);
               
}
}
if(isset($_POST['formWheelchair']) && 
   $_POST['formWheelchair'] == 'Yes')
{
	update('c1',$c1);
$s1 = ociparse($c1, "SELECT * FROM useri WHERE username='$username'");
    echo '<br />';
    if(ociexecute($s1))
    {
        while (ocifetch($s1)) 
        {
			
                        
        }
    }
    else
    {
	$e = oci_error($s1); 
        echo htmlentities($e['message']);
    }
	sleep(2);
}
?>
</body>
</html>
