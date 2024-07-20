<?php
define("PAGE","Technician");
define("Title","Technician");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['sub24'])){
	$t_id=$_POST['t_id'];
	$q24="select * from technician where tech_id='$t_id'";
	$run24=mysqli_query($con,$q24);
	$row24=mysqli_fetch_array($run24);
}
if(isset($_POST['sub25'])){
	$tech_id=$_POST['tech_id'];
	$tech_name=$_POST['tech_name'];
	$tech_email=$_POST['tech_email'];
	$tech_mobile=$_POST['tech_mobile'];
	$tech_city=$_POST['tech_city'];
	$q25="update technician set tech_name='$tech_name', tech_email='$tech_email', tech_city='$tech_city', tech_mobile='$tech_mobile' where tech_id='$tech_id'";
	$run25=mysqli_query($con,$q25);
	if($run25){
		$msg="<div class='alert alert-success mt-4 p-2'>Updated Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger mt-4 p-2'>Update fail</div>";
	}
}
?>
<div class="col-md-6 col-sm-6 mt-4 mb-5 ml-4">
<div class="jumbotron">
<h3 class="text-center">Update Technician Details</h3>
<form action="" method="post">
<div class="form-group">
Technician ID
<input type="text" name="tech_id" value="<?php if(isset($row24['tech_id'])){echo$row24['tech_id'];}?>" class="form-control" readonly>
</div>
<div class="form-group">
Name
<input type="text" name="tech_name" value="<?php if(isset($row24['tech_id'])){echo$row24['tech_name'];}?>" class="form-control">
</div>
<div class="form-group">
Email
<input type="text" name="tech_email" value="<?php if(isset($row24['tech_id'])){echo$row24['tech_email'];}?>" class="form-control">
</div>
<div class="form-group">
Mobile
<input type="text" name="tech_mobile" value="<?php if(isset($row24['tech_id'])){echo$row24['tech_mobile'];}?>" class="form-control">
</div>
<div class="form-group">
City
<input type="text" name="tech_city" value="<?php if(isset($row24['tech_id'])){echo$row24['tech_city'];}?>" class="form-control">
</div>
<div class="form-group">
<input type="submit" name="sub25" class="btn btn-danger" value="Update">
<a href="technician.php" class="btn btn-secondary ml-2">Close</a>
</div>
</form>
<?php
if(isset($msg)){
	echo$msg;
}
?>
</div>
</div>
</div><!-- row ended -->
</div>
<!-- link all script needed-->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>