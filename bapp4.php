<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_SESSION["un"];

$dname=$_POST["t1"];
$cname=$_POST["t2"];
$addr=$_POST["t3"];
$cno=$_POST["t4"];
$reason=$_POST["t5"];
$adate=$_POST["t6"];
$status="Pending";


$sql1="select * from pdet where oname='$username'";

$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc())
{
	$ptype=$row1["ptype"];
	$breed=$row1["breed"];
	$gender=$row1["gender"];
	$age=$row1["age"];
	$ocno=$row1["cno"];
	$oaddr=$row1["addr"];
	
}

$sql2 = "INSERT INTO appdet(adate,dname,cname,addr,cno,ptype,breed,gender,age,oname,ocno,oaddr,reason,status) VALUES ('$adate','$dname','$cname','$addr','$cno','$ptype','$breed','$gender','$age','$username','$ocno','$oaddr','$reason','$status')";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Appointment Details Uploaded");</script>';
		include("userhomepage.php");
	}

			
		
	



?>