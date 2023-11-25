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
            cursor: pointer;
			padding: 10px 15px;
			background-color: green;
			border: 0;
			border-radius: 4px;
            color: white;
            font-size: 20px;
            margin-top: 15px;
            margin-left: 60px;
		}
		.text{
			width: 80px;
            border: 2px solid green;
			padding: 10px;
			margin-bottom: 10px;
            font-size: 24px;
            font-weight: 600;
		}
        h3{
            font-family: sans-serif;
            color: white;
            font-weight: 900;
            text-shadow: 2px 2px 5px red;
        }
        p{
            font-size: 20px;
            font-weight: 500;
            font-family: sans-serif;
            text-shadow: 2px 2px 5px green;
            color: white;
            display: inline-block;
            margin-right: 10px;
        }
	</style>
</head>
<body>
<div>
<h3>Enter a Number is an<br> Positive or Negative</h3><br>
<form action="posneg.php" method="get">
<p>Enter a Number :</p><input  class="text" name="num" value=""><br>
<input type="submit" class="btn" name="add" value="submit"><br>
</form>
</div> 