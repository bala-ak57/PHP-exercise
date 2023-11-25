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
    $r=0;
    $i=1;
    while($a!=0)
    {
        $x=$a%10;
        $r=($r*10)+$x;
        $a=floor($a/10);
        $i++;
    }
    echo "$r";
}
    ?>
    <form method="get">
        <input type="number" name="num"><br>
        <input type="submit" name="result"><br>
</form>
</body>
</html>