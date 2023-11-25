<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
if(($a>$b)&&($a>$c))
{
    echo "The Biggest Number is $a";
}
  elseif(($b>$a)&&($b>$c))
  {
    echo "The Biggest Number is $b";
  }
else{
    echo "The Biggest Number is $c";
}
?>