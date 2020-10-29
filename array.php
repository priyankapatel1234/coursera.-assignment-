<html>
<head>
<title>Array operation</title>
</head>
<body>
<p>sum of array elements</p>
<?php
 if(isset($_GET["name"])) 
 {
	 $name =$_GET["name"];
	 echo "Welcome $name";


 
$names= array(11,12,13,14,15);
$len=count($names);
echo $len;
echo "Length of array is ".$len.'<br>';
$sum=0;
for($i=0;$i<$len;$i++)
{
	$sum+=$names[$i];
}
ECHO "Sum of array elements ";
echo "$sum".'<br>';
define("message","kiet group of institutions",true);
echo message;

 }
 else{
	 echo "you are not valid user";
	 include("login.html");
	 //require("login.html");
	 //echo "hello";
	// require_once("login.html");
 }
?>
</body>
</html>
