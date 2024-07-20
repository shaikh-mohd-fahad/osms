<?php
session_start();
if(!isset($_SESSION['adminname'])){
	echo"<script>location.href='login.php';</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
<title><?php echo Title;?></title>
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
<nav class="navbar navbar-fixed navbar-expand-md navbar-dark bg-primary py-0 d-print-none">
<a href="../index.php" class="navbar-brand my-0"><strong>OSMS</strong></a>
</nav>
<div class="container-fluid">
<div class="row"><!-- row started -->
<div class="col-md-2 bg-light p-3 d-print-none"><!-- col-md-2 started -->
<ul class="nav nav-pills flex-column mt-4">

<li class="nav-item "> <a href="dashboard.php" class="nav-link <?php if(PAGE=='Dashboard'){echo'active';} ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

<li class="nav-item"> <a href="workorder.php" class="nav-link <?php if(PAGE=='Work Order'){echo'active';} ?>"><i class="fab fa-accessible-icon"></i> Work Order</a></li>

<li class="nav-item"> <a href="requests.php" class="nav-link <?php if(PAGE=='Requests'){echo'active';} ?>"><i class="fas fa-align-center"></i> Requests</a></li>

<li class="nav-item"> <a href="assets.php" class="nav-link <?php if(PAGE=='Assets'){echo'active';} ?>"><i class="fas fa-align-center"></i> Assets</a></li>

<li class="nav-item"> <a href="technician.php" class="nav-link <?php if(PAGE=='Technician'){echo'active';} ?>"><i class="fas fa-align-center"></i> Technician</a></li>

<li class="nav-item"> <a href="requester.php" class="nav-link <?php if(PAGE=='Requester'){echo'active';} ?>"><i class="fas fa-users"></i> Requester </a></li>

<li class="nav-item"> <a href="sellreport.php" class="nav-link <?php if(PAGE=='Sell Report'){echo'active';} ?>"><i class="fas fa-table"></i> Sell Report </a></li>

<li class="nav-item"> <a href="workreport.php" class="nav-link <?php if(PAGE=='Work Report'){echo'active';} ?>"><i class="fas fa-table"></i> Work Report </a></li>

<li class="nav-item"> <a href="changepassword.php" class="nav-link <?php if(PAGE=='Change Password'){echo'active';} ?>"><i class="fas fa-key"></i> Change Password </a></li>

<li class="nav-item"> <a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

</ul>
</div><!-- col-md-2 ended -->
