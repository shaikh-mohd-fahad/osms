<?php
define("Page",'Submit Request');
define("Title",'Submit Request');
include_once('conn.php');
include_once('includes/header.php');
if(isset($_POST['sub9'])){
	$request_info=$_POST['request_info'];
	$request_date=$_POST['request_date'];
	$request_desc=$_POST['request_desc'];
	$requester_name=$_POST['requester_name'];
	$requester_add1=$_POST['requester_add1'];
	$requester_add2=$_POST['requester_add2'];
	$requester_city=$_POST['requester_city'];
	$requester_state=$_POST['requester_state'];
	$requester_email=$_POST['requester_email'];
	$requester_mobile=$_POST['requester_mobile'];
	$requester_zip=$_POST['requester_zip'];
	$q9="insert into request(request_info, request_desc, request_date, requester_name, requester_add1, requester_add2, requester_city, requester_state, requester_email, requester_mobile, requester_zip) values('$request_info', '$request_desc', '$request_date', '$requester_name', '$requester_add1', '$requester_add2', '$requester_city', '$requester_state', '$requester_email', '$requester_mobile', '$requester_zip')";
	$run9=mysqli_query($con,$q9);
	if($run9){
		$_SESSION['id']=mysqli_insert_id($con);
		echo"<script>location.href='submitrequestsuccess.php';</script>";
	}
	else{
		echo"<script>alert('not running');</script>";
	}
}
?>
<div class="col-md-9 ml-4 mt-5">
<form action="" method="post">
<div class="form-group">
Request Info
<input type="text" name="request_info" placeholder="Request Info" class="form-control">
</div>
<div class="form-group">
Description
<input type="text" name="request_desc" placeholder="Description" class="form-control">
</div>
<div class="form-group">
Name
<input type="text" name="requester_name" placeholder="Name" class="form-control">
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
Address Line 1
<input type="text" name="requester_add1" placeholder="Address" class="form-control">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
Address Line 2
<input type="text" name="requester_add2" placeholder="Address" class="form-control">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
City
<input type="text" name="requester_city" placeholder="City" class="form-control">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
State
<input type="text" name="requester_state" placeholder="State" class="form-control">
</div>
</div>
<div class="col-md-2">
<div class="form-group">
ZIP
<input type="text" name="requester_zip" placeholder="ZIP" class="form-control">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
Email
<input type="email" name="requester_email" placeholder="Email" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
Mobile
<input type="text" name="requester_mobile" placeholder="Mobile Number" class="form-control">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
Date
<input type="date" name="request_date" placeholder="Date" class="form-control">
</div>
</div>
</div>
<input type="submit" name="sub9" value="Submit" class="btn btn-danger">
<input type="reset" value="Reset" class="btn btn-secondary">
</form>
</div>

<?php
include_once('includes/footer.php');
?>