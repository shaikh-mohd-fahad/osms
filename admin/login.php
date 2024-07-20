<?php
session_start();
if(isset($_SESSION['adminname'])){
	echo"<script>location.href='dashboard.php'</script>";
}
include_once('../conn.php');
if(isset($_POST['sub2'])){
	$aemail=$_POST['aemail'];
	$apass=$_POST['apass'];
	$q3="select * from adminlogin where email='$aemail' and password='$apass'";
	$run3=mysqli_query($con,$q3);
	$row3=mysqli_fetch_array($run3);
	$aname=$row3['name'];
	$row_num3=mysqli_num_rows($run3);
	if($row_num3==1){
		$_SESSION['adminname']=$aname;
		$_SESSION['adminemail']=$aemail;
		echo"<script> location.href='dashboard.php'; </script>";
	}
	else{
		$msg="<div class='alert alert-warning mt-3'>**Email or Password is wrong</div>";
		}
}
?>
<html>
<head>
<title>Login </title>
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
<h1 class="mt-4 text-center"> <i class="fa fa-stethoscope"></i> Online Service Management System</h1>
<p class="text-center mt-3" style="font-size:20px"> <i class="fas fa-user-secret  text-danger"></i>Admin Login Area </p>
<div class="row justify-content-center">

<div class="col-md-4 col-sm-6 mt-3">
<form class=" px-3 py-3 shadow" action="" method="post">
<div class="form-group">
<label><strong><i class="fa fa-user"></i> Email</strong></label><input type="email" name="aemail" placeholder="Email" class="form-control" required>
</div>
<div class="form-group">
<label><strong><i class="fa fa-key"></i> Password</strong></label><input type="password" name="apass" placeholder="Password" class="form-control" required>
</div>
<div class="form-group">
<input type="submit" name="sub2" value="Login" class="btn btn-outline-danger btn-block">
</div>
<?php
if(isset($msg)){
	echo$msg;
}
?>
</form>
<div class="text-center">
<a href="../index.php" class="text-center btn btn-info mt-3">Back to Home </a>
</div>
</div>

</div>
<!-- link all script needed-->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>