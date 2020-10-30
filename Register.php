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
         $name=$_REQUEST["name"];
         $branch=$_REQUEST["branch"];
         $section=$_REQUEST["section"];
         if(empty($name)||empty($branch)||empty($section))
         {
           echo "plz register first!";
         }
         else{
         echo "your name =$name<br>";
         echo "your branch =$branch<br>";
         echo "your section =$section<br>";
         }
      }
      else{

   ?>

        <h1>Register Yourself</h1>
    <form  action="Register.php" method="get">
    <input type ="text" name="name" placeholder="enter you name"><br><br>
    <input type ="text" name="branch" placeholder="enter you course"><br><br>
    <input type ="text" name="section" placeholder="enter you section"><br><br>
    <input type ="submit" name="submit" value ="Register"><br><br>

<?php
      }

    ?>
    
    
    </form>

    </body>
    </html>

