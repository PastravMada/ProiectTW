<?php
    $conn=oci_connect("mihaela","veronica","localhost/XE");
	
    if(isset($_POST['id_parfum'])&&isset($_POST['discount'])&&
    isset($_POST['data_inceput'])&&isset($_POST['data_sfarsit']))
    {
        $id_parfum = $_POST['id_parfum'];
        $discount = $_POST['discount'];
        $data_inceput = $_POST['data_inceput'];
        $data_sfarsit = $_POST['data_sfarsit'];
		
        $sql = "insert into PROMOTII(id_parfum,discount,data_inceput,data_sfarsit) values('$id_parfum',$discount,'$data_inceput','$data_sfarsit')";
                $stid = oci_parse($conn,$sql);
                $r = oci_execute($stid);
               if($r) 
               {
				  oci_commit($conn);
                   echo ' Promotion inserted...<br>';
                }
                else
                {
					$m = oci_error($stid);
                   // echo "Error Save ['.$m['message'].']";
                    echo 'data was not inserted...<br>';
                }
    }	
//oci_close($conn);
?>

