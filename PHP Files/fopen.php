<?php
$file=fopen("file.txt","w");
$txt="Hello World! I am Siva<br>";
fwrite($file, $txt);
fclose($file);
$file=fopen("file.txt", "r");
echo fread($file, filesize("file.txt"));
fclose($file);
$file=fopen("file.txt", "w");
$txt="Hello World! I am Bala<br>";
fwrite($file, $txt);
fclose($file);
$file=fopen("file.txt", "r");
echo fread($file, filesize("file.txt"));
fclose($file);
$file=fopen("file.txt", "a");
$txt="Hello World! I am Sudhan";
fwrite($file, $txt);
fclose($file);
$file=fopen("file.txt", "r");
echo fread($file, filesize("file.txt"));
fclose($file);
// $file=fopen("file.txt", "r+");
// $txt="Hello World! I am Sivabala Sudhan.";
// fwrite($file,$txt);
// fclose($file);
$file=fopen("file.txt", "w+");
$txt="Hello World! I am Sethu Bala sasi.";
fwrite($file,$txt);
fclose($file);
$file=fopen("file.txt", "a+");
$txt="Hello World! I am Sethu Bala sasi arun karuppu.";
fwrite($file,$txt);
fclose($file);
?>