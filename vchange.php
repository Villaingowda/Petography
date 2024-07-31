<?php

error_reporting(0);
session_start();
$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$un=$_SESSION["vun"];
$cp=$_POST["t1"];
$np=$_POST["t2"];


$sql="select * from vdet where username='$un' and password='$cp'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	include("vchangeerror.html");
}
else
{
	$sql1 = "update vdet set password='$np' where username='$un'";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Password Changed Successfully');</script>";
		include("vhomepage.php");
	}
	
}

?>