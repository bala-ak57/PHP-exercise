<?php
$a=$_GET['bank'];
switch($a)
{
    case "Deposit":
        echo "<div>
        <h1>Enter Your 4 Digit Pin here:</h1><br>
        <form action='amountout.php' method='get'>
        <input  type='password' name='num1' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Withdrawal":
        echo "<div>
        <h1>Enter Your 4 Digit Pin here:</h1><br>
        <form action='amountout.php' method='get'>
        <input  type='password' name='num1' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
}
