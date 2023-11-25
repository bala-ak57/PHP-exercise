<?php
$find=$_GET['find'];
$file=fopen("find.txt","w");
$txt="If the string to be searched is an array, it returns an array
If the string to be searched is an array, find and replace is performed with every array element
If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
If find is an array and replace is a string, the replace string will be used for every find value";
fwrite($file,$txt);
fclose($file);
$file=fopen("find.txt", "r");
fread($file, filesize("find.txt"));
echo str_replace($find, "Array" , $txt);

?>