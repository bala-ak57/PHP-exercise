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
    $b=$a;
    $i=1;
    $j=1;
    $fact=1;
    $result=0;
    while($a>0)
    {
        $x=$a%10;
        $a=floor($a/10);
        $fact=1;
        for($j=1;$j<=$x;$j++)
        {
            $fact=$fact*$j;
        }
        $result += $fact;
        $i++;
    }
    if($b==$result)
    {
        echo "$b is a Strong Number";
    }
    else{
        echo "$b is Not a Strong Number";
    }
}
?>
    <form method="get">
        <input type="number" name="num"><br>
        <input type="submit" name="result"><br>
</form>
</body>
</html>