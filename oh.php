<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Petography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
	

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
	<script src="script.js" defer></script>
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
	<link href="https://www.cssscript.com/demo/sticky.css" rel="stylesheet" type="text/css">
    <!-- Customized Bootstrap Stylesheet -->
    <style>
	#zoomA {
  /* (A) OPTIONAL DIMENSIONS */
  width: 200px;
  height: auto;
 
  /* (B) ANIMATE ZOOM */
  /* ease | ease-in | ease-out | linear */
  transition: transform ease-in-out 0.3s;
}
 
/* (C) ZOOM ON HOVER */
#zoomA:hover { transform: scale(1.5); }
</style>

	<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}



#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Peto</span>graphy</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                   
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">info@petography.in</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+91 9845098450</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Peto</span>graphy</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="userhomepage.php" class="nav-item nav-link">Home</a>
                    <a href="pdet.html" class="nav-item nav-link">Pet Details</a>
                    <a href="app1.php" class="nav-item nav-link">Appointments</a>
                    <a href="vdet.php" class="nav-item nav-link">Vaccination Details</a>
					<a href="buy1.php" class="nav-item nav-link">Buy</a>
					<a href="oh.php" class="nav-item nav-link active">Order History</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Settings</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="update1.php" class="dropdown-item">Update Info</a>
                            <a href="changepass.html" class="dropdown-item">Change Password</a>
                        </div>
                    </div>
                    <a href="logout.html" class="nav-item nav-link">Logout</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    

    <?php
	error_reporting(0);
	session_start();
	?>


    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
		<h4 class="text-secondary mb-3">Order History</h4>
		<table id="customers" border="1" cellpadding="5" cellspacing="5">
				  <tr>
					<th>Order ID
					<th>Customer Name
					<th>Address
					<th>Contact Number
					<th>Product Name
					<th>Category
					<th>Qty
					<th>Price
					<th>Amount
					<th>Photo
					<th>Status
					</tr>
					<?php
					error_reporting(0);
					session_start();
					$host="localhost";
					$db="pet";
					$user="root";
					$pass="";

					$conn = new mysqli($host, $user, $pass, $db);

					$username=$_SESSION["un"];
										
					$sql="select * from orders where username='$username'";

					$result = $conn->query($sql);

					while($row = $result->fetch_assoc())
					{
						$aid=$row["oid"];
						$adate=$row["username"];
						$ptype=$row["addr"];
						$breed=$row["cno"];
						$age=$row["pname"];
						$oname=$row["pcat"];
						$ocno=$row["qty"];
						$reason=$row["price"];
						$amt=$row["amt"];
						$photo=$row["photo"];
						$status=$row["status"];
						echo "<tr>";
						echo "<td>".$aid;
						echo "<td>".$adate;
						echo "<td>".$ptype;
						echo "<td>".$breed;
						echo "<td>".$age;
						echo "<td>".$oname;
						echo "<td>".$ocno;
						echo "<td>".$reason;
						echo "<td>".$amt;
						echo "<td><img src='".$photo."' width=200 height=200>";
						echo "<td>".$status;
						
						
						echo "</tr>";
					}
					?>
				  </table>		  
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                
                
                
    
            </div>
            
        </div>
    </div>
    <!-- About End -->



    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Peto</span>graphy</h1>
                <p class="m-0">Purpose of this application is to take good care of pets.It is our responsibility to keep a track of the pets vaccinations. Using this application we can search the details of Vet Clinic in our area and can book appointments with the Vet for our Pets. We can even order Pet accessories.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Kumarswamy Layout, Bangalore</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 7022805512</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@petography.in</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            
                            <a class="text-white" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="">Petography</a>. All Rights Reserved. 
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>