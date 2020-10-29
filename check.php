<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>Document</title>
    </head>
    <body>
        <?php
        if(isset($_GET["submit"]))   //$_POST,$_REQUEST also use
        {
           $name=$_GET["name"];
           $pwd=$_GET["pwd"];
        if($name=="KIET" && $pwd=="KIET")
        {
           // echo "Welcome $name";
           header("Location:array.php ?name=$name");
        }   
        else 
        {
          echo "Invalid user name and password!";  
          include("login.php");
        }
        }   

        ?>
    </body>
</html>