<?php
$a=readline("Enter a number ");
if(($a & ($a - 1)) == 0)
{
    echo "$a is power of 2";
}
else
{
    echo "$a is not power of 2";
}
?>