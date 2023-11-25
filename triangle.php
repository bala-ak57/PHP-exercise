<?php
$a=$_GET['num1'];
$b=$_GET['num2'];
$c=(1/2)*$a*$b;
$d= round($c, 2);
echo "Area of Triangle: $d cm<sup>2<sup>";
?>