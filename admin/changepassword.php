<?php
define("PAGE","Change Password");
define("Title","Change Password");
include_once('../conn.php');
include_once('includes/header.php');
$aemail=$_SESSION['adminemail'];
$q6="select * from adminlogin where email='$aemail'";
$run6=mysqli_query($con,$q6);
$row6=mysqli_fetch_array($run6);
if(isset($_POST['sub7'])){
	$apass=$_POST['apass'];
	$q7="update adminlogin set password='$apass' where email='$aemail'";
	$run7=mysqli_query($con,$q7);
	if($run7){
		$msg="<div class='alert alert-success mt-3'>Updated Successfully</div>";
	}
}
?>
<div class="col-md-9 mt-5 ml-3">
<form action="" method="post">
<div class="form-group">
<label>Email</label>
<input type="email" value="<?php echo$aemail;?>" disabled class="form-control">
</div>
<div class="form-group">
<label>Password</label>
<input type="text" placeholder="Enter New Password" class="form-control" name="apass">
</div>
<div  class="form-group">
<input type="submit" value="Update" class="btn btn-danger" name="sub7">
<input type="reset" value="Reset" class="ml-2 btn btn-secondary">  
</div>
</form>
<?php
if(isset($msg)){
	echo$msg;
}
?>
</div>
<?php
include_once('includes/footer.php');
?>