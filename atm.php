<?php
$bank=$_GET['bank'];
switch($bank)
{
    case "Deposit":
        echo "<div>
        <h1>Choose Your A/C type:</h1><br>
        <form action='deposit.php' method='get'>
        <input type='radio' id='deposit' name='bank' value='Deposit'>
        <label for='deposit'>Current A/C</label><br>
        <input type='radio' id='withdrawal' name='bank' value='Withdrawal'>
        <label for='withdrawal'>Savings A/C</label><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Withdrawal":
        echo "<div>
        <h1>Choose Your A/C type:</h1><br>
        <form action='withdrawal.php' method='get'>
        <input type='radio' id='deposit' name='bank' value='Deposit'>
        <label for='deposit'>Current A/C</label><br>
        <input type='radio' id='withdrawal' name='bank' value='Withdrawal'>
        <label for='withdrawal'>Savings A/C</label><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
    case "Balance":
        echo "<div>
        <h1>Enter Your 4 Digit Pin here:</h1><br>
        <form action='balance.php' method='get'>
        <input  type='password' name='num1' value=''><br>
        <input type='submit' class='btn' name='result' value='Enter'><br>
        </form>
        </div>";
        break;
}

?>