<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="upload.php" method="post" enctype="multipart/form-data">
  <h1>Resume Template:</h1>
  Enter Your Name Here: <input type="text" name="name"><br>
  Enter Your Age Here: <input type="number" name="age"><br>
  Enter Your Mobile Number Here: <input type="tel" name="number"><br>
  Enter Your Email Here: <input type="email" name="email"><br>
  Enter Your Address Here: <input type="text" name="address"><br>
  Enter Your Work Position Here:<br>
  <input type="checkbox" id="position1" name="position[]" value="Full Stack developer">
  <label for="position1"> Full Stack developer</label><br>
  <input type="checkbox" id="position2" name="position[]" value="Front-end developer">
  <label for="position2"> Front-end developer</label><br>
  <input type="checkbox" id="position3" name="position[]" value="Back-end developer">
  <label for="position3"> Back-end developer</label><br>
  <input type="checkbox" id="position4" name="position[]" value="Data Analyst">
  <label for="position4"> Data Analyst</label><br>
  <input type="checkbox" id="position5" name="position[]" value="Team Lead">
  <label for="position5"> Team Lead</label><br>
  <input type="checkbox" id="position6" name="position[]" value="Senior developer">
  <label for="position6"> Senior developer</label><br>
  Enter Your Language Known:<br>
  <input type="checkbox" id="lan1" name="language" value="Tamil">
  <label for="lan1"> Tamil</label><br>
  <input type="checkbox" id="lan2" name="language" value="English">
  <label for="lan2"> English</label><br>
  <input type="checkbox" id="lan3" name="language" value="Telugu">
  <label for="lan3"> Telugu</label><br>
  <input type="checkbox" id="lan4" name="language" value="Hindi">
  <label for="lan4"> Hindi</label><br>
  <input type="checkbox" id="lan5" name="language" value="Malayalam">
  <label for="lan5"> Malayalam</label><br>
  <input type="checkbox" id="lan6" name="language" value="Spanese">
  <label for="lan6"> Spanese</label><br>

  <input type="file" name="upload" id="upload"><br>
  <input type="submit" value="Submit" name="submit"><br>
</form>
</body>/
</html>