<?php
define("Page",'Change Password');
define("Title",'Change Password');
include_once('conn.php');
include_once('includes/header.php');
$useremail=$_SESSION['email'];
if(isset($_POST['sub4'])){
	$pass=$_POST['pass'];
	$q4="update userlogin set password='$pass' where email='$useremail'";
	$run4=mysqli_query($con,$q4);
	if($run4){
		$msg="<div class='alert alert-success'>Password changed successfully</div>";
	}
}
?>

<div class="col-md-10 col-sm-9 mt-4">
<h3 class="text-center">Change Your Password</h3>
<form action="" method="post" class="mt-3">
<div class="form-group">
<input type="text" name="" value="<?php echo$useremail;?>" class="form-control" disabled>
</div>
<div class="form-group">
<input type="text" name="pass" placeholder="Enter New Password" class="form-control">
</div>
<div class='form-group'>
<input type="submit" name="sub4" class="btn btn-outline-danger btn-block">
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