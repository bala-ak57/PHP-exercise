<?php
echo "<div>
<h1>Enter a Amount here :</h1><br>
<form action='thanku.php' method='get'>
<input type='radio' id='deposit' name='bank' value='Deposit'>
<label for='deposit'>Confirm</label><br>
<input type='radio' id='withdrawal' name='bank' value='Withdrawal'>
<label for='withdrawal'>Add More Cash</label><br>
<input type='radio' id='Balance' name='bank' value='Balance'>
<label for='Balance'>Cancel</label><br>
<input type='submit' class='btn' name='result' value='Enter'><br>
</form>
</div>";
?>