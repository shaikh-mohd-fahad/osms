<?php
session_start();
if(!isset($_SESSION['username'])){
	echo"<script>location.href='login.php'</script>";
}
?>
<html>
<head>
<title><?php echo Title;?> </title>
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
<nav class="navbar navbar-expand-md bg-danger navbar-dark py-2">
<a href="index.php" class="navbar-brand " style="font-size:25px;font-style:italic"><strong>OSMS</strong></a>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-md-2 d-print-none bg-light p-3">
<ul class="mt-4 flex-column nav nav-pills">
<li class="nav-item"><a href="profile.php" class="nav-link <?php if(Page=='Profile'){echo'active';} ?>"><i class="fas fa-user"></i> Profile</a></li>
<li class='nav-item'><a href="submitrequest.php" class="nav-link <?php if(Page=='Submit Request'){echo'active';} ?>"><i class="fab fa-accessible-icon"></i> Submit Request</a></li>
<li class="nav-item"><a href="checkstatus.php" class="nav-link  <?php if(Page=='Check Status'){echo'active';} ?>"><i class="fas fa-align-center"></i> Check Status</a></li>

<li class="nav-item"><a href="ChangePassword.php" class="nav-link  <?php if(Page=='Change Password'){echo'active';} ?>"><i class="fas fa-key"></i> Change Password</a></li>
<li class="nav-item"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
</ul>
</div>