<?php

error_reporting(0);
session_start();
$host="localhost";
$db="pet";
$user="root";
$pass="";

$conn = new mysqli($host, $user, $pass, $db);

$un=$_SESSION["vun"];
$pname=$_POST["t1"];
$pcat=$_POST["t2"];
$pdesc=$_POST["t3"];
$mname=$_POST["t4"];
$price=$_POST["t5"];

$target_dir = "products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "<script>alert('Upload Only Image Files');</script>";
  
}
else
{
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	
	$sql1 = "INSERT INTO product(pname,pcat,pdesc,bname,price,photo,uby) VALUES ('$pname', '$pcat','$pdesc','$mname','$price','$target_file','$un')";

	if ($conn->query($sql1) === TRUE)
	{
		echo "<script>alert('Product Uploaded Successfully');</script>";
		include("vhomepage.php");
	}
}



?>