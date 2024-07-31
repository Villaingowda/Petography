<?php

error_reporting(0);

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$aid=$_POST["t1"];
$adate=$_POST["t2"];
$ptype=$_POST["t3"];
$breed=$_POST["t4"];
$age=$_POST["t5"];
$oname=$_POST["t6"];
$ocno=$_POST["t7"];
$vdet=$_POST["t8"];
$ndate=$_POST["t9"];


	$sql1 = "INSERT INTO vcdet VALUES ('$aid', '$adate', '$ptype','$breed','$age','$oname','$ocno','$vdet','$ndate')";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Vaccination Details Uploaded');</script>";
		include("vhomepage.php");
	}



?>