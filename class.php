<!DOCTYPE html>
<html long="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>Document</title>
    </head>
    <body>
    <?php
     class Student {
         public $name ="priyanka";
         public $add="pipariya";
         public $section="A";
         function displayName() 
         {
             echo "<br>your name =$this->name";
             echo "<br>address=$this->add";
             echo "<br>section=$this->section";
         }
     }

     $obj =new Student();
     $obj->displayName();

    ?>
    </body>
    </html>
