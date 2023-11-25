<?php
$a=$_GET['num1'];
if(($a>10000) && ($a<20000))
   {
    $esi=$a*(6/100);
    $pf=$a*(6/100);
    $hri=$a*(8/100);
    $insurance=$esi+$pf+$hri;
    $salary=$a-$insurance;
    echo "Your salary is $salary";
   }
   elseif(($a>20000) && ($a<30000))
   {
    $esi=$a*0.08;
    $pf=$a*0.08;
    $hri=$a*0.12;
    $insurance=$esi+$pf+$hri;
    $salary=$a-$insurance;
    echo "Your salary is $salary";
   }
   elseif(($a>30000) && ($a<50000))
   {
    $esi=$a*0.10;
    $pf=$a*0.10;
    $hri=$a*0.15;
    $insurance=$esi+$pf+$hri;
    $salary=$a-$insurance;
    echo "Your salary is $salary";
   }
   elseif($a>=50000)
   {
    $esi=$a*0.12;
    $pf=$a*0.12;
    $hri=$a*0.18;
    $insurance=$esi+$pf+$hri;
    $salary=$a-$insurance;
    echo "Your salary is $salary";
   }
?>