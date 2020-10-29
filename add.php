<!DOCTYPE html>
 <html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action ="array.php">  
Enter First Number:  
<input type="number" name="num1" /><br><br>  
Enter Second Number:  
<input type="number" name="num2" /><br><br>  
<input  type="submit" name="submit" value="Add to numbers">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $num1 = $_POST['num1'];  
        $num2 = $_POST['num2'];  
        $sum =  $num1+$num2;     
echo "The sum of $num1 and $num2 is: ".$sum;   
}  
?>  
</body>
</html>

