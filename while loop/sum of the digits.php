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
    $sum=0;
    $i=0;
    $x=0;
    while($i<=$a)
    {
        $x=$i%10;
        $sum=$sum+$x;
        $a=$a/10;
        $i++;
    }
    echo "Sum of the digit is $sum";
}
    ?>
    <form method="get">
        <input type="number" name="num"><br>
        <input type="submit" name="result"><br>
</form>
</body>
</html>