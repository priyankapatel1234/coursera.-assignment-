<!DOCTYPE html>
 <html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" >  
Enter First Number:  
<input type="text" name="input1" /><br><br>   
<input  type="submit" name="submit" value="reverse">  
</form>  
<?php  
    if(!empty($_POST['input1'])){
        $inputstr=$_POST['input1'];
        $length=strlen($inputstr);
        for($i=($length-1);$i>=0;$i--){
            echo $inputstr[$i];
        }
        }
    
?>  
</body>
</html>
