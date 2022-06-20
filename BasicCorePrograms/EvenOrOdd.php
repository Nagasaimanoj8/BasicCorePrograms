<?php 
// PHP code to check whether the number  
// is Even or Odd in Normal way

function check($n){ 
    if($n % 2 == 0){ 
        echo "Even";  
    } 
    else{ 
        echo "Odd"; 
    } 
}  
$n = readline("Enter a Number") ; 
check($n) 
?> 