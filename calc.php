<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(67,67,184,1) 58%, rgba(0,212,255,1) 100%);
            width: 100%;
            height: 100vh;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div{
            width: 30%;
            height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgb(63,94,251);
background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
            border: 0;
            border-radius: 8px;
            padding: 20px;
            margin: 0 10px;
        }
        .form{
            padding: 15px;
        }
        .btn{
			padding: 10px 15px;
			background-color: green;
			border: 0;
			border-radius: 4px;
		}
		.text{
			width: 80px:
			border: 2px solid green;
			padding: 10px;
			margin-bottom: 10px;
		}
        h1{
            font-family: sans-serif;
            color: white;
            font-weight: 900;
            text-shadow: 2px 2px 5px red;
        }
	</style>
</head>
<body>

<div>
<h1>Calculator</h1><br>
<form action="block.php" method="get">
<span>First Number:</span><br><input  class="text" name="add1" value=""><br>
<span>Second Number:</span><br><input class="text"  name="add2" value=""><br>
<input type="submit" class="btn" name="add" value="Add"><br>
Result:<input type="text" value="<?php echo "Your Answer is $add";?>">
</form>
</div>  
<!-- <div>
<h1>Calculator</h1><br>
<form action="sub.php" method="get">
<span>First Number:</span><br><input  class="text" name="sub1" value=""><br>
<span>Second Number:</span><br><input class="text"  name="sub2" value=""><br>
<input type="submit" class="btn" name="sub" value="Sub"><br>
</form>
</div>
<div>
<h1>Calculator</h1><br>
<form action="multi.php" method="get">
<span>First Number:</span><br><input  class="text" name="mul1" value=""><br>
<span>Second Number:</span><br><input class="text"  name="mul2" value=""><br>
<input type="submit" class="btn" name="multi" value="Multiply"><br>
</form>
</div>
<div>
<h1>Calculator</h1><br>
<form action="div.php" method="get">
<span>First Number:</span><br><input  class="text" name="div1" value=""><br>
<span>Second Number:</span><br><input class="text"  name="div2" value=""><br>
<input type="submit" class="btn" name="sub" value="Division"><br>
</form>
</div>  -->
</body>
</html>