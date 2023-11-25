<?php
$file="file.txt";
$open=fopen($file, "r");
$data=fread($open, 5);
fclose($open);
echo $data;
?>