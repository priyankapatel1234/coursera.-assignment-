<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>Document</title>
    </head>
    <body>
    <?php

        if(isset($_REQUEST["submit"]))   //$_POST,$_REQUEST also use
        {
           $name=$_REQUEST["name"];
           $pwd=$_REQUEST["pwd"];
        if($name=="KIET" && $pwd=="KIET")
        {
           // echo "Welcome $name";
           header("Location:array.php ?name=$name");
        }   
        else  
        {
            echo "plz enter username and password";
         // echo "Invalid user name and password!";  
         // include("login.php");
        }
        }   

   ?>
        <h1>Login Here</h1>
        <form action="login.php" method="POST">
            <input type="text" name="name" placeholder="Enter the name"><br><br>
            <input type="password" name="pwd" placeholder="Enter the password"><br><br>
            <input type="submit" name="submit" value="Login" ><br><br>
        </form>
    </body>
</html>




