<?php
$a=$_POST['a1'];
$b=$_POST['a2'];
$c=$_POST['a3'];
$d=$_POST['a4'];
$e=$_POST['a5'];
$f=$_POST['a6'];
$servername="localhost";
$username="root";
$password="";
$dbname="admin1";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con)
{
	die("connection failed:".mysqli_connect_error());
}
else{
	$sql="INSERT INTO `hotel`(`Hotel name`,`mobile`,`telephone`,`Address`,`City`,`Rating`) VALUES ('$a','$b','$c','$d','$e','$f');";
	$var=mysqli_query($con,$sql);
	if($var){
echo"record inserted";

	}
else{
	echo"error:".$sql."<br>".mysqli_error($con);
}

}
mysqli_close($con);
?>