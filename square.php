<?php
$shape=$_GET['shape'];
switch($shape)
{
    case "Circle":
        echo "<div>
        <h1>Find the area of circle</h1><br>
        <form action='circle.php' method='get'>
        <span>Enter the radius :</span><br><input  class='text' name='num1' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Square":
        echo "<div>
        <h1>Find the area of Square</h1><br>
        <form action='box.php' method='get'>
        <span>Enter the Side :</span><br><input  class='text' name='num1' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Rectangle":
        echo "<div>
        <h1>Find the area of Rectangle</h1><br>
        <form action='rectangle.php' method='get'>
        <span>Enter the Length :</span><br><input  class='text' name='num1' value=''><br>
        <span>Enter the Width :</span><br><input  class='text' name='num2' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Triangle":
        echo "<div>
        <h1>Find the area of Triangle</h1><br>
        <form action='triangle.php' method='get'>
        <span>Enter the Length :</span><br><input  class='text' name='num1' value=''><br>
        <span>Enter the breadth :</span><br><input  class='text' name='num2' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
}

?>