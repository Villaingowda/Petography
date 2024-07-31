<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$pid=$_GET["id"];

$conn = new mysqli($host, $user, $pass, $db);


$sql = "delete from product where pid='$pid'";

if ($conn->query($sql) === TRUE) {
		
		echo "<script>alert('Product Deleted Successfully');</script>";
		include("admhomepage.php");
	}


?>