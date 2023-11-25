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
            background: rgb(9,9,121);
background: radial-gradient(circle, rgba(9,9,121,1) 16%, rgba(0,212,255,1) 65%, rgba(2,0,36,1) 90%);
            width: 100%;
            height: 100vh;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div{
            width: 45%;
            height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: rgb(9,9,121);
background: radial-gradient(circle, rgba(9,9,121,1) 16%, rgba(0,212,255,1) 65%, rgba(2,0,36,1) 90%);
            border: 1px solid black;
            box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;
            border-radius: 50%;
            padding: 20px;
            margin: 0 10px;
        }
        .form{
            padding: 15px;
        }
        .btn{
			padding: 15px 25px;
            border-radius: 50%;
			background: rgb(9,9,121);
background: radial-gradient(circle, rgba(9,9,121,1) 16%, rgba(0,212,255,1) 65%, rgba(2,0,36,1) 90%);
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
			border: 0;
            margin-left: 55px;
            color: white;
            font-size: 20px;
            font-weight: 900;
            text-shadow: 2px 2px 5px #020024; 
            font-family: sans-serif;
            letter-spacing: 5px;
            cursor: pointer;
		}
		.text{
			width: 250px;
			border: 2px solid #020024;
            border-radius: 50%;
			padding: 10px;
			margin-bottom: 24px;
            margin-top: 18px;
            text-align: center;
            font-size: 25px;
            font-weight: 900;
		}
        h1{
            font-family: sans-serif;
            color: white;
            font-weight: 900;
            text-shadow: 2px 2px 5px #020024;
        }
        span{
            font-family: sans-serif;
            color: white;
            font-weight: 900;
            text-shadow: 2px 2px 5px #020024; 
            display: inline-block;
            margin-left: 45px;
        }
    </style>
</head>
<body>
<div>
<h1>Leap Year or Not</h1><br>
<form action="nonleap.php" method="get">
<span>Enter a year :</span><br><input  class="text" name="num" value=""><br>
<input type="submit" class="btn" name="result" value="Enter"><br>
</form>
</div>
    
</body>
</html>