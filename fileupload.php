<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>Document</title>
    </head>
    <body>
     <?php

     if(isset($_REQUEST["submit"]))
     {
         $path="data/";
         $filename =$path.$_FILES["file"]["name"];
         $tempfile=$_FILES["file"]["tmp_name"];
        // print_r($_FILES);
        if(file_exists($filename))
        {
          echo "File already exits";
        }
         elseif(move_uploaded_file($tempfile,$filename))
         {
             echo "file uploaded successfully";
         }
         else
         {
            echo "File not uploaded";
         }
     }

     ?>
    <h1>Uloaded your file.</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" name="submit" value="Uploaded File"><br>
    </form>
</body>
</html>
