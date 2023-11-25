<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['result']))
{
$a=$_GET['num'];
$i=1;
$j=1;
for($i=1;$i<=$a;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo "<h1 style='display:inline-block;'>*</h1>";
    }
    echo "<br>";
}
}
?>
    <form method="get">
        <input type="number" name="num"><br>
        <input type="submit" name="result"><br>
     </form>
</body>
</html>