<html>
<head>
<title> Sum of digits.</title>
</head>
<body>
<p> Sum of digits. </p>

<?php
$sum=0;
$a=12345;

while($a>0)
{
$var =$a%10;
$sum=$sum +$var;
$a=$a/10;
}

echo "print sum of digit is $sum";

 
?>
</body>
</html>