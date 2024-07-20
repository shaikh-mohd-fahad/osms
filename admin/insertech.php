<?php
define("PAGE","Technician");
define("Title","Technician");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['sub26'])){
	$tech_name=$_POST['tech_name'];
	$tech_email=$_POST['tech_email'];
	$tech_mobile=$_POST['tech_mobile'];
	$tech_city=$_POST['tech_city'];
	$q26="insert into technician(tech_name, tech_email, tech_mobile, tech_city) values('$tech_name','$tech_email','$tech_mobile','$tech_city')";
	$run26=mysqli_query($con,$q26);
	if($run26){
		$msg="<div class='alert alert-success mt-4 p-2'>Submitted Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger mt-4 p-2'>Submit fail</div>";
	}
}
?>
<div class="col-md-6 col-sm-8">
<div class="jumbotron">
<h3 class="text-center">Add New Technician</h3>
<form action="" method="post">
<div class="form-group">
Name
<input type="text" name="tech_name" class="form-control">
</div>
<div class="form-group">
Email
<input type="text" name="tech_email" class="form-control" required>
</div>
<div class="form-group">
Mobile
<input type="text" name="tech_mobile" class="form-control">
</div>
<div class="form-group">

City
<input type="text" name="tech_city" class="form-control">
</div>
<div class="form-group">
<input type="submit" name="sub26" class="btn btn-danger" value="Submit">
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