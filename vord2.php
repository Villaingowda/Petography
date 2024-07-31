<?php

error_reporting(0);
session_start();
$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);


$aid=$_POST["t1"];
$status=$_POST["t3"];


	$sql1 = "update orders set status='$status' where oid='$aid'";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Order Status Updated Successfully');</script>";
		include("vhomepage.php");
	}
	


?>