<?php
$file=fopen("bala.txt", "w");
fclose($file);
$data="bala.txt";
unlink($data);
?>