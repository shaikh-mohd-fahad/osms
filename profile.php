<?php
define("Page",'Profile');
define("Title",'Profile');
include_once('conn.php');
include_once('includes/header.php');
$uemail=$_SESSION['email'];

if(isset($_POST['sub8'])){
	$name=$_POST['uname'];
	$q8="update userlogin set name='$name' where email='$uemail'";
	$run8=mysqli_query($con,$q8);
	if($run8){
		//echo"<script>location.href='profile.php';</script>";
		$msg="<div class='alert alert-success mt-3'>Updated Successfully</div>";
	}
	
}
$q7="select * from userlogin where email='$uemail'";
$run7=mysqli_query($con,$q7);
$row7=mysqli_fetch_array($run7);
?>
<div class="col-md-5 ml-4 mt-5">
<form action="" method="post">
<div class="form-group">
<label>Email</label>
<input type="text" name='' value="<?php echo$row7['email'];?>" class="form-control" disabled>
</div>
<div class="form-group">
<label>Name</label>
<input type="text" name="uname" class="form-control" value="<?php echo$row7['name'];?>">
</div>
<div class="form-group">
<input type="submit" name="sub8" class="btn btn-danger" value="Update"> 
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