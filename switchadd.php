<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Calculator</h1><br>
<form action="switchsub.php" method="get">
<span>Number 1 :</span><br><input  class="text" name="num1" value=""><br>
<span>Number 2 :</span><br><input  class="text" name="num2" value=""><br>
<label>Choose Your Method</label>
<select name="logic">
    <option value="Addition">Addition</option>
    <option value="Subraction">Subraction</option>
    <option value="Multiply">Multiply</option>
    <option value="Divide">Divide</option>
    <option value="Modulus">Modulus</option>
</select>
<input type="submit" class="btn" name="result" value="Enter"><br>
</form>
</div>   
</body>
</html>