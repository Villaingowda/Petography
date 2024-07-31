<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$username=$_SESSION["un"];

$conn = new mysqli($host, $user, $pass, $db);

$fname=$_POST["t3"];
$lname=$_POST["t4"];
$addr=$_POST["t5"];
$mobno=$_POST["t6"];
$email=$_POST["t7"];


$sql = "update user_det set fname='$fname', lname='$lname', addr='$addr', cno='$mobno', email='$email' where username='$username'";

if ($conn->query($sql) === TRUE) {
		
		echo "<script>alert('Information Updated Successfully');</script>";
		include("userhomepage.php");
	}


?>