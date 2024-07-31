<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_SESSION["un"];

$ptype=$_POST["t1"];
$breed=$_POST["t2"];
$gender=$_POST["t3"];
$age=$_POST["t4"];


$sql1="select * from user_det where username='$username'";

$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc())
{
	$addr=$row1["addr"];
	$cno=$row1["cno"];
	
}

$sql2 = "INSERT INTO pdet VALUES ('$ptype','$breed','$gender','$age','$username','$cno','$addr')";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Pet Details Uploaded");</script>';
		include("userhomepage.php");
	}

			
		
	



?>