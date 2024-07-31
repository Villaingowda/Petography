<?php

error_reporting(0);

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_POST["t1"];
$password=$_POST["t2"];
$fname=$_POST["t3"];
$lname=$_POST["t4"];
$addr=$_POST["t5"];
$mobno=$_POST["t6"];
$email=$_POST["t7"];
$loc=$_POST["t8"];

$sql="select * from vdet where username='$username'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$temp=$row["username"];
	
}

if(!$temp)
{
	$sql1 = "INSERT INTO vdet VALUES ('$username', '$password', '$fname','$lname','$addr','$mobno','$email','$loc')";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Registration Successfull');</script>";
		include("vlogin.html");
	}
}
else
{
	include("vregistererror.html");
}


?>