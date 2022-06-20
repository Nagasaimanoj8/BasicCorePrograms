<?php
    $myYear=readline("Enter a number ");
    if($myYear<9999 && $myYear>999){
    if ($myYear % 400 == 0)
         print("It is a leap year");
      else if ($myYear % 100 == 0)
         print("It is not a leap year");
      else if ($myYear % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
    }
    else{
      echo("enter 4 digits");
    }
?>