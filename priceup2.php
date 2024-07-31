<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);



$id=$_POST["t2"];
$price=$_POST["t5"];



$sql2 = "update product set price='$price' where pid='$id'";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Price Updated Successfully");</script>';
		include("vhomepage.php");
	}

			
		
	



?>