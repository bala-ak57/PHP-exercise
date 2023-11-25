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
if(($n1>90) && ($n1<=100))
{
    echo "Your Grade of Subject Tamil is : S <br>";
}
     elseif(($n1>80) && ($n1<=90))
     {
         echo "Your Grade of Subject Tamil is : A <br>";
     }
     elseif(($n1>70) && ($n1<=80))
     {
         echo "Your Grade of Subject Tamil is : B <br>";
     }
     elseif(($n1>60) && ($n1<=70))
     {
         echo "Your Grade of Subject Tamil is : C <br>";
     }
     elseif(($n1>50) && ($n1<=60))
     {
         echo "Your Grade of Subject Tamil is : D <br>";
     }
else{
    echo "Reappear a Paper <br>";
}

if(($n2>90) && ($n2<=100))
{
    echo "Your Grade of Subject English is : S <br>";
}
     elseif(($n2>80) && ($n2<=90))
     {
         echo "Your Grade of Subject English is : A <br>";
     }
     elseif(($n2>70) && ($n2<=80))
     {
         echo "Your Grade of Subject English is : B <br>";
     }
     elseif(($n2>60) && ($n2<=70))
     {
         echo "Your Grade of Subject English is : C <br>";
     }
     elseif(($n2>50) && ($n2<=60))
     {
         echo "Your Grade of Subject English is : D <br>";
     }  
 else{
     echo "Reappear a Paper <br>";
 }
  if(($n3>90) && ($n3<=100))
  {
      echo "Your Grade of Subject Maths is : S <br>";
  }
       elseif(($n3>80) && ($n3<=90))
       {
           echo "Your Grade of Subject Maths is : A <br>";
       }
       elseif(($n3>70) && ($n3<=80))
       {
           echo "Your Grade of Subject Maths is : B <br>";
       }
       elseif(($n3>60) && ($n3<=70))
       {
           echo "Your Grade of Subject Maths is : C <br>";
       }
       elseif(($n3>50) && ($n4<=60))
       {
           echo "Your Grade of Subject Maths is : D <br>";
       } 
   else{
     echo "Reappear a Paper <br>";
 }
 if(($n4>90) && ($n4<=100))
 {
     echo "Your Grade of Subject Science is : S <br>";
 }
      elseif(($n4>80) && ($n4<=90))
      {
          echo "Your Grade of Subject Science is : A <br>";
      }
      elseif(($n4>70) && ($n4<=80))
      {
          echo "Your Grade of Subject Science is : B <br>";
      }
      elseif(($n4>60) && ($n4<=70))
      {
          echo "Your Grade of Subject Science is : C <br>";
      }
      elseif(($n4>50) && ($n4<=60))
      {
          echo "Your Grade of Subject Science is : D <br>";
      }
   else{
     echo "Reappear a Paper <br>";
 }
      if(($n5>90) && ($n5<=100))
      {
          echo "Your Grade of Subject Social is : S <br>";
      }
           elseif(($n5>80) && ($n5<=90))
           {
               echo "Your Grade of Subject Social is : A <br>";
           }
           elseif(($n5>70) && ($n5<=80))
           {
               echo "Your Grade of Subject Social is : B <br>";
           }
           elseif(($n5>60) && ($n5<=70))
           {
               echo "Your Grade of Subject Social is : C <br>";
           }
           elseif(($n5>50) && ($n5<=60))
           {
               echo "Your Grade of Subject Social is : D <br>";
           }
  else{        
   echo "Reappear a Paper <br>";
   }


?>
</body>
</html>