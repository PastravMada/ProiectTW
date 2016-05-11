<?php
$fullString='John;Doe;Jr;Hello;Dear';
$fullSplit=explode(';', $fullString);

$im1=$fullSplit[0];
$im2=$fullSplit[1];
$im3=$fullSplit[2];
$im4=$fullSplit[3];
$im5=$fullSplit[4];

echo "<br>$im1";
echo "<br>$im2";
echo "<br>$im3";
echo "<br>$im4";
echo "<br>$im5";
?>