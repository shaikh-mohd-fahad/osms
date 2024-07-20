<?php
define("PAGE","Requester");
define("Title","Requester");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$q20="select * from userlogin where id='$id'";
	$run20=mysqli_query($con,$q20);
	$row20=mysqli_fetch_array($run20);
	}
if(isset($_POST['sub21'])){
$uid=$_POST['uid'];
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$q21="update userlogin set email='$uemail', name='$uname' where id='$uid'";
$run21=mysqli_query($con,$q21);
if($run21){
	$msg="<div class='alert alert-success p-2'>Updated Successfully";
}
else{
	$msg="<div class='alert alert-danger p-2'>Update fail";
}
}
?>
<div class="col-md-6 mt-4 mb-5">
<div class="jumbotron">
<h2 class="text-center">Update User Detail</h2>
<form class="" action="" method="post">
<div class="form-group">
Requester ID
<input type="text" class="form-control" name="uid" value="<?php if(isset($row20['id'])){echo$row20['id'];}?>" readonly>
</div>
<div class="form-group">
Name
<input type="text" class="form-control" name="uname" value="<?php if(isset($row20['name'])){echo$row20['name'];}?>">
</div>
<div class="form-group">
Email
<input type="email" class="form-control" name="uemail" value="<?php if(isset($row20['email'])){echo$row20['email'];}?>">
</div>
<div class="form-group">
<input type="submit" name="sub21" class="btn btn-danger" value="Update">
<a href="requester.php" class="btn btn-secondary ml-2">Close</a>
</div>
</form>
<?php
if(isset($msg)){
	echo$msg;
}
?>
</div>
</div>

<?php
include_once('includes/footer.php');
?>