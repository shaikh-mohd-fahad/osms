<?php
include_once('conn.php');
?>
<?php
if(isset($_POST['sub1'])){
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$upass=$_POST['upass'];
	$q2="select email from userlogin where email='$uemail'";
	$run2=mysqli_query($con,$q2);
	$row2=mysqli_fetch_array($run2);
	$email=$row2['email'];
	if($email==$uemail){
		$msg="<div class='alert alert-danger mt-3'>** Email is alredy Register</div>";
	}else{
	$q1="insert into userlogin(name,email,password) values('$uname', '$uemail', '$upass')";
	$run1=mysqli_query($con,$q1);
	if($run1){
		$msg="<div class='alert alert-success mt-3'>Successfully Register</div>";
	}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
<title>OSMS </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!-- link bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- link font awesome -->
<link href="css/all.min.css" rel="stylesheet">
<!-- link custom css -->
<link href="css/customcss.css" rel="stylesheet">
</head>
<body>
<div id="header"><!-- header start-->
<div class="navbar navbar-expand-md navbar-dark bg-primary fixed-top py-1"><!-- navbar started-->
<a href="index.php" class="navbar-brand"><strong>OSMS</strong> </a> <span>customer's happiness is our aim</span>
<button class="navbar-toggler" data-target="#nclp" data-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
<div class="navbar-collapse collapse" id="nclp">
<ul class="navbar-nav nav">
<li class="nav-item"> <a href="index.php" class="nav-link"> Home</a> </li>
<li class="nav-item"> <a href="#Service" class="nav-link"> Services</a> </li>
<li class="nav-item"> <a href="#Register" class="nav-link"> Registration</a> </li>
<li class="nav-item"> <a href="login.php" class="nav-link"> Login</a> </li>
<li class="nav-item"> <a href="#ContactUs" class="nav-link"> Contact us</a> </li>
</ul>
</div>
</div><!-- navbar ended-->
<div class="" id="headerdetail"><!-- headerdetail start-->
<h1>WELCOME TO OSMS</h1>
<span class="d-block mb-3">customer's happiness is our aim</span>
<a href="login.php" class="btn btn-success">Log in</a>
<a href="" class="btn btn-danger ml-3">Sign Up</a>
</div><!-- headerdetail ended-->
</div><!-- header ended-->

<div class="jumbotron mt-4 mb-3 py-3" id="Service"><!-- osms services --> 
<h1 class="text-center">OSMS Services</h1>
<p class="text-justify"> This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service. This is our Service.</p>
</div><!-- osms services ended-->

<div class='container-fluid text-center border-bottom mt-4 mb-4 py-3'> <!-- our services ended-->
<h1 class="text-center">Our Services</h1>
<div class="row">
<div class="col-md-4">
<a href=""> <i class="fa fa-tv fa-8x text-success"></i></a>
<h4>Electronic Appliances</h4>
</div>
<div class="col-md-4">
<a href=""> <i class="fa fa-sliders-h fa-8x"></i></a>
<h4>Preventive Maintenance</h4>
</div>
<div class="col-md-4">
<a href=""> <i class="fa fa-cogs fa-8x"></i></a>
<h4>Fault Repair</h4>
</div>
</div>
</div><!-- our services ended-->

<div class="container-fluid mb-5" id="Register"><!-- create new account start -->
<h1 align="center">Create Account</h1><br>
<div class="row">
<div class="col-md-3"></div>
<div class="shadow col-md-6 p-3">
<form action="" method="post">
<div class="form-group">
<strong><i class="fa fa-user"></i> Name</strong>
<input type="text" name="uname" class="form-control" placeholder="Enter Name" required>
</div>
<div class="form-group">
<strong><i class="fa fa-user"></i> Email</strong>
<input type="email" name="uemail" class="form-control" placeholder="Enter Email" required>
</div>
<div class="form-group">
<strong><i class="fa fa-key"></i> Password</strong>
<input type="password" name="upass" class="form-control" placeholder="Enter Password" required>
<small>We will never share your details with anyone.</small>
</div>

<input type="submit" class="btn btn-danger btn-block" value="Submit" name="sub1">
</form>
<?php
if(isset($msg)){
	echo"$msg";
}
?>
</div>
<div class="col-md-3"></div>
</div>
</div><!-- create new account ended-->

<div class="jumbotron bg-primary mb-5"> <!-- our happy customer start-->
<h1 class="text-center text-white">Our Happy Customer</h1>
<div class="container mt-5">
<div class="row"><!-- row start-->
<div class="col-lg-3 col-sm-6 mb-3 pb-0"><!-- column start -->
<div class="card shadow" width="200px">

<div class="card-body text-center">
<img src="image/men1.jpg" class="card-img w-50 rounded-circle">
<h3 class="card-title">Fahad</h3>
<p class="card-text text-justify"> This is fahad. This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.   </p>
</div>
</div>
</div><!-- column end -->
<div class="col-lg-3 col-sm-6 mb-3 pb-0"><!-- column start -->
<div class="card shadow" width="200px">
<div class="card-body text-center">
<img src="image/w1.jpg" class="card-img w-50 rounded-circle">
<h3 class="card-title">abc</h3>
<p class="card-text text-justify"> This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc. This is abc.</p>
</div>
</div>
</div><!-- column end -->
<div class="col-lg-3 col-sm-6 mb-3 pb-0"><!-- column start -->
<div class="card shadow" width="200px">
<div class="card-body text-center">
<img src="image/men2.jpg" class="card-img w-50 rounded-circle">
<h3 class="card-title">Fahad</h3>
<p class="card-text text-justify"> This is fahad. This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.  This is fahad.   </p>
</div>
</div>
</div><!-- column end -->
<div class="col-lg-3 col-sm-6 mb-3 pb-0"><!-- column start -->
<div class="card shadow" width="200px">
<div class="card-body text-center">
<img src="image/w2.jpg" class="card-img w-50 rounded-circle">
<h3 class="card-title">abc</h3>
<p class="card-text text-justify"> This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc Shaikh. This is abc. This is abc.</p>
</div>
</div>
</div><!-- column end -->
</div><!-- row end-->
</div>
</div><!-- our happy customer ended-->

<div class="container" id="ContactUs"> <!-- contact us start -->
<h1 class="text-center">Contact Us</h1>
<div class="row">
<div class="col-md-8">
<form action="" method="post">
<div class="form-group">
<input type="text" class="form-control" name="" placeholder="Name">
</div>
<div class="form-group">
<input type="text" class="form-control" name="" placeholder="Subject">
</div>
<div class="form-group">
<input type="email" class="form-control" name="" placeholder="Email">
</div>
<div class="form-group">
<textarea class="form-control" name="" placeholder="How can I help you" rows="5"></textarea>
</div>
<input type="Submit" value="Send" name="" class="btn btn-primary">
</form>
</div>
<div class="col-md-4 text-center">
<h6><strong>Headquarter</strong></h6>
<p>nyay vihar colony, <br>Bhitoli,<br>Sitapur Road,<br>Lucknow<br>Phone: +987657656<br><a href="index.php">www.osms.com</a></p>
<h6><strong>Branch</strong></h6>
<p>nyay vihar colony, <br>Bhitoli,<br>Sitapur Road,<br>Lucknow<br>Phone: +987657656<br><a href="index.php">www.osms.com</a></p>
</div>
</div>

</div><!-- contact us end -->

<div class="container-fluid bg-dark py-3" ><!-- footer -->
<div class="container">
<div class="row text-white">
<div class="col-md-6" id="ftr">
<small class="left">
Follow us:
 <a href="#"> <i class="fab fa-facebook-f ml-2"></i></a>
  <a href="#"> <i class="fab fa-twitter ml-2"></i></a>
   <a href="#"> <i class="fab fa-whatsapp ml-2"></i></a>
    <a href="#"> <i class="fab fa-youtube ml-2"></i></a>
	 <a href="#"> <i class="fab fa-google-plus-g ml-2"></i></a>
	  <a href="#"> <i class="fas fa-rss ml-2"></i></a>
</small>
</div>
<div class="col-md-6" id="ftr" >
<small class="right">
Designed by Mohammad Fahad &copy; 2019 <a href="admin/login.php">Admin login</a>
</small>
</div>
</div>
</div>
</div><!-- footer end -->

<!-- link all script needed-->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>