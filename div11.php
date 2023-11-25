<?php
$a=$_GET['num1'];
if($a%5==0 && $a%11==0)
{
    echo "You enter a Number is Divisible by 5 & 11";
}
else{
    echo "You enter a Number is Not a Divisible by 5 & 11";
}
?>