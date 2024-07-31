<?php

error_reporting(0);
session_start();
$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);


$cp=$_POST["t1"];
$np=$_POST["t2"];


$sql="select * from admin where username='admin' and password='$cp'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	include("achangeerror.html");
}
else
{
	$sql1 = "update admin set password='$np' where username='admin'";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Password Changed Successfully');</script>";
		include("admhomepage.php");
	}
	
}

?>