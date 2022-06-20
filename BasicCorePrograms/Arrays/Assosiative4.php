<?php
$a=readline("Enter a name");
$n=array("Elena"=>"30","Nick"=>"35");
if(array_key_exists($a,$n))
{
    echo ("Name Exists \n Elena age is" .$n['Elena']."Years old");
   
}
elseif(array_key_exists($a,$n)){
    echo ("Name Exists \n Nick age is" .$n['Nick']."Years old");
}
else{
    echo ("Name not Exists");
}
?>