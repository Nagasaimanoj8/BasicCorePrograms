<?php
$number=array("Manoj","Ram","Jonam" );
$age=array("20","60","90");
$c=array_combine($number,$age);
array_push($c,"30","40","50","60");
array_pop($c);
print_r($c);
?>