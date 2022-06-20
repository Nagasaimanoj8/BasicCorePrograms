<?php
$n=readline("Enter a number");
$fact=1;
while($n>1){
$fact=$fact*$n;
$n=$n-1;
}
echo $fact;
?>