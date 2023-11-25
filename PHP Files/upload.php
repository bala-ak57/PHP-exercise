<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Nandinagari&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .container{
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            background: rgb(250,250,254);
            background-image: url("./upload/id.jpeg");
            background-size: cover;
            width: 25%;
            height: 475px;
            border-radius: 3px;
        }
        .img{
            display: flex;
            justify-content: center;
            margin: 30px 0;
        }
        .title{
           text-align: center;
           margin: 10px 0;
           color: Blue;
           text-shadow: -3px 3px 8px rgba(241,229,229,0.25);
           font-family: 'Caprasimo', cursive;
        }
        img{
            width: 120px;
            height: 120px;
            border-radius: 10%;
            object-fit: cover;
        }
        .content{
            text-align: center;
            margin-top: 20px;
            font-size:18px;
            font-weight: 600;
        }
        .name, .dob, .number, .email{
            margin-top: 15px;
            font-family: 'Noto Sans Nandinagari', sans-serif;
        }
        .name{
            font-size:25px;
            font-weight: 600;
            font-family: 'Aoboshi One', serif;
        }
        </style>
</head>
<body>
<?php
    $a="upload/";
        $n=$_FILES['upload'];
        $n1=$_POST['name'];
        $n2=$_POST['dob'];
        $n3=$_POST['number'];
        $n4=$_POST['email'];
        $img= htmlspecialchars( basename( $_FILES["upload"]["name"]));
        $b=$a.basename($_FILES["upload"]["name"]);
        $c=$_FILES["upload"]["name"];
        $uploadOk=1;
        $filetype=strtolower(pathinfo($b,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["upload"]["tmp_name"]);
        if($check !== false)
        {
        //   echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } 
        else
        {
          echo "File is not an image.";
          $uploadOk = 0;
        }
        if (file_exists($b))
        {
            // echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        if ($_FILES["upload"]["size"] > 500000)
        {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg" && $filetype != "gif")
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }  
        if ($uploadOk == 0)
        {
            // echo "Sorry, your file was not uploaded.";
        } 
        else
        {
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $b)) {
            //   echo "The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.";
            } else {
            //   echo "Sorry, there was an error uploading your file.";
            }
          }    
    ?>
<div class="container">
    <div class="title">
        <h2>Blue Pearl Computer Education</h2>
        <p>Pasumpon Nagar, Madurai</p>
        <small>Ph-no: 90876-90876.</small>
    </div>
     <div class="img"><img src="./upload/<?php echo $img; ?>"></div>
     <div class="content">
       <div class="name"><?php echo $n1; ?> </div>
       <div class="dob">DOB: <?php echo $n2; ?> </div>
       <div class="number">Ph-No: <?php echo $n3; ?> </div>
       <div class="email">Email: <?php echo $n4; ?> </div>
    </div>
</div>
</body>
</html>