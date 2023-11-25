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
    </style>
</head>
<body>
<?php
 $n1=$_GET['num'];
  if($n1>0)
  {
    echo "<p style=\"font-size: 60px; font-family: sans-serif; font-weight: 900; color: white;\">You enter a number is <b style= \"color: green; font-size: 65px; font-weight: 900; background-color: black; padding: 0 12px;\">Positive</b></p>";
  }
  elseif($n1==0){
    echo "<p style=\"font-size: 60px; font-family: sans-serif; font-weight: 900; color: white;\">You enter a number is <b style= \"color: Black; font-size: 65px; font-weight: 900; background-color: white; padding: 0 12px;\">Zero</b></p>";
  }
  else
  {
    echo "<p style=\"font-size: 60px; font-family: sans-serif; font-weight: 900; color: white;\">You enter a number is <b style= \"color: red; font-size: 65px; font-weight: 900; background-color: black; padding: 0 12px;\">Negative</b></p>";
  }
  ?> 
</body>
</html>