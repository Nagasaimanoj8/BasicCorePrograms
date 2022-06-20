<?php
      $num1=readline("Enter a number");
      $num2=readline("Enter a number");
      $num3=readline("Enter a number");
      if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      elseif($num2>$num1 && $num2>$num3){
          echo  "The largest number Among Three  $num1 $num2 $num3 is \n $num2";
      }
      else
          echo "The largest number Among Three $num1 $num2 $num3 is \n$num3";

?>