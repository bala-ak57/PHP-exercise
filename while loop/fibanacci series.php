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
    $n=$_GET['num'];
    $c=0;
    $a=0;
    $b=1;
    $i=0;
    while($i<=$n)
    {
        $c=$a+$b;
        $a=$b;
        $b=$c;
        $i++;
        echo "$c, ";
    }
}
    ?>
    <form method="get">
        <input type="number" name="num"><br>
        <input type="submit" name="result"><br>
</form>
</body>
</html>