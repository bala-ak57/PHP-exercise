<?php
$n1=$_GET['num1'];
$n2=$_GET['num2'];
$calculator=$_GET['logic'];
switch($calculator)
{
    case "Addition":
        add($n1, $n2);
        break;
    case "Subraction":
        $c= sub($n1, $n2);
        echo $c;
        break;
    case "Multiply":
        multi();
        break;
    case "Divide":
        $d=div();
        echo $d;
        break;
    case "Modulus":
        mod($n1, $n2);
        break;
}
function add($n1, $n2)
{
  $n3=$n1+$n2;
  echo "Your Answer is: $n3";
}
function sub($n1, $n2)
{
  return $n3=$n1-$n2;
 // echo "Your Answer is: $n3";
}
function multi()
{
    $n1=$_GET['num1'];
    $n2=$_GET['num2'];
    $n3=$n1*$n2;
  echo "Your Answer is: $n3";
}
function div()
{
    $n1=$_GET['num1'];
    $n2=$_GET['num2'];
    return $n3=$n1/$n2;
//   echo "Your Answer is: $n3";
}
function mod($n1, $n2)
{
  $n3=$n1%$n2;
  echo "Your Answer is: $n3";
}
?>