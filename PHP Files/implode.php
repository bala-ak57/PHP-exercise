<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['submit']))
    {
    $fav=$_GET['fav'];
    // echo "Your are selecting Favourite Places is: <br>";
    // echo "<input type='checkbox' checked>";
    // echo implode( "<input type='checkbox' id='places' checked>", $fav);
    // echo "<label></label><br><input type='checkbox' checked>";
    // foreach($fav as $value)
    // {
        // echo "<input type='checkbox' checked><label>$value</label>";  
    // }
    ?>
    <input type='checkbox' <?php if(in_array("Bangalore", $fav)){ echo "checked"; }?>><label>Bangalore</label>
    <?php
    }
    ?>
<form action="" method="get">
    Click Your Favourite Place:<br>
  <input type="checkbox" id="position1" name="fav[]" value="Bangalore">
  <label for="position1">Bangalore</label><br>
  <input type="checkbox" id="position2" name="fav[]" value="Delhi">
  <label for="position2"> Delhi</label><br>
  <input type="checkbox" id="position3" name="fav[]" value="Mumbai">
  <label for="position3"> Mumbai</label><br>
  <input type="checkbox" id="position4" name="fav[]" value="Monali">
  <label for="position4"> Monali</label><br>
  <input type="checkbox" id="position5" name="fav[]" value="Kerala">
  <label for="position5"> Kerala</label><br>
  <input type="checkbox" id="position6" name="fav[]" value="Simla">
  <label for="position6"> Simla</label><br>
  <input type="submit" name="submit" value="Submit">
</form>
    
</body>
</html>