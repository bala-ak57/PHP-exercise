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
$n1=$_GET['tamil'];
$n2=$_GET['english'];
$n3=$_GET['maths'];
$n4=$_GET['science'];
$n5=$_GET['social'];
if($n1>35 && $n2>35 && $n3>35 && $n4>35 && $n5>35)
{
    echo "<p style=\"font-size: 60px; font-family: sans-serif; font-weight: 900; color: white; text-shadow: 5px 1px 9px rgba(228,21,66,0.99);\">You are <b>Pass</b></p>";
}
else{
    echo "<p style=\"font-size: 60px; font-family: sans-serif; font-weight: 900; color: white; text-shadow: 5px 1px 9px rgba(228,21,66,0.99);\">You are <b>Fail</b></p>";
}
?>
</body>
</html>