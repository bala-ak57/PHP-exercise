<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$b-$a;
if($c<=100)
{
    echo "Your Use less than 100 Unit so for free";
}
elseif(($c>100) && ($c<=200))
{
    $d=$c-100;
    $e=$d*1;
    echo "You EB Charge is $e";
}
elseif(($c>200) && ($c<=300))
{
    $d=(100*0)+(100*1);
    $e=$c-200;
    $f=$d+($e*2);
    echo "You EB Charge is $f";
}
elseif(($c>300) && ($c<=500))
{
    $d=(100*0)+(100*1)+(100*2);
    $e=$c-300;
    $f=$d+($e*3.5);
    echo "You EB Charge is $f";
}
elseif($c>500)
{
    $d=(100*0)+(100*1)+(100*2)+(100*3.5);
    $e=$c-500;
    $f=$d+($e*5.25);
    echo "You EB Charge is $f";
}
?>