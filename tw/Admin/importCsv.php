<?php 
$row = 1; 
if (($handle = fopen("file.csv", "r")) !== FALSE)
	{
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
			{ $num = count($data);
		echo " ","Record #",$row," "; 
		$row++; 
		for ($recordcount=0; $recordcount < $num; $recordcount++)
			{ echo $data[$recordcount] . " \n<br/>"; 
		}
		} fclose($handle);
		}
?>