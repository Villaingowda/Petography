<?php

error_reporting(0);
session_start();

$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$username=$_SESSION["un"];

$id=$_POST["t2"];
$qty=$_POST["t7"];

$sql="select * from product where pid='$id'";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$pname=$row["pname"];
	$pcat=$row["pcat"];
	$pdesc=$row["pdesc"];
	$mname=$row["bname"];
	$price=$row["price"];
	$photo=$row["photo"];
	$uby=$row["uby"];
}


$amt=$qty*$price;

$status="Under Process";


$sql1="select * from user_det where username='$username'";

$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc())
{
	$addr=$row1["addr"];
	$cno=$row1["cno"];
	
}

$sql2 = "INSERT INTO orders(username,addr,cno,pname,pcat,pdesc,mname,price,qty,amt,photo,status,uby) VALUES ('$username','$addr','$cno','$pname','$pcat','$pdesc','$mname','$price','$qty','$amt','$photo','$status','$uby')";

	if ($conn->query($sql2) === TRUE)
	{
		echo '<script type="text/javascript">alert("Your Order is Placed. Amount to be Paid is ' . $amt . '");</script>';
		include("userhomepage.php");
	}

			
		
	



?>