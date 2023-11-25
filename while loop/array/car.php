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
    $c=$_GET['car'];
    $i=0;
    for($i=0;$i<3;$i++)
    {
        echo "$c[$i] <br>";
    }
    foreach($c as $key => $value)
    {
        echo "$value <br>";
    }
}
?>
<form method="get">
<input type="checkbox" name="car[]" value="Audi">
<label> Audi</label><br>
<input type="checkbox" name="car[]" value="BMW">
<label> BMW</label><br>
<input type="checkbox" name="car[]" value="Benz">
<label> Benz</label><br>
<input type="submit" name="result" value="submit">
</form>
</body>
</html>
