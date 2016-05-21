<?php

$c1 = oci_connect("mihaela", "veronica", 'localhost/XE');

?>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
	<link rel="stylesheet" type="text/css" href="IncluziuniAdmin/incluziuniAdmin.css">
	<link rel="stylesheet" href="cssMenu/layout.css" type="text/css" media="screen">
    <link rel="stylesheet" href="cssMenu/menu.css" type="text/css" media="screen">
	<form name="register_form" method="post">
    <table width="50%" border="0" cellpadding="0" cellspacing="2">
<?php include('IncluziuniAdmin/headerAdmin.php');?>
	 <form action="action_page.php">
 <tr>
       <td width="100%">Username-ul introdus de dumneavoastra va fi admin:</td>
    </tr>
            <td width="40%">Username</td>
            <td><input type="text" name="Username" id="Username" /></td>
   </tr>
   <tr>
           Sunteti sigur?
    <input type="checkbox" name="formWheelchair" value="Yes" />
</tr><br><tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="btn_i" id="in" value="Adauga" /></td>
        </tr>
    </table>
</form>
</form>
<?php 
function update($connname, $conn)
{ 	
		$strSQL = "UPDATE Useri SET Username='Admin' WHERE username= :username ";
    $stmt = oci_parse($conn, $strSQL);
	oci_bind_by_name($stmt, ":username", $username);
    oci_execute($stmt, OCI_DEFAULT);

}


if(isset($_POST['formWheelchair']) && 
   $_POST['formWheelchair'] == 'Yes')
{
	update('c1',$c1);


$s1 = ociparse($c1, "SELECT * FROM useri");
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

