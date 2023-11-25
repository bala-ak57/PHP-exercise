<?php
    $a="upload/";
        $n=$_FILES['upload'];
        $name=$_POST['name'];
        $age=$_POST['age'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $img= htmlspecialchars( basename( $_FILES["upload"]["name"]));
        $position=$_POST['position'];
        $language=$_POST['language'];
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