<?php

$num1 = readline("Enter a number 1");
$num2 = readline("Enter a number 2");

echo "Values of number1 and number2 before swapping :\n num1 = ".$num1." and \n num2 = " .$num2 ;

$num1 = $num1+$num2;  // $num1 = 25+50=75
$num2 = $num1-$num2;   // $num2 = 75-50 =25
$num1 = $num1-$num2;  // $num1 = 75-25 = 50

echo "Values of number1 and number2 after swapping : num1 = ".$num1."\n and num2 = " .$num2;
?>