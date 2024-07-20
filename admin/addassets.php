<?php
define("PAGE","Assets");
define("Title","Assets");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['sub30'])){
	$pname=$_POST['pname'];
	$pdop=$_POST['pdop'];
	$pavail=$_POST['pavail'];
	$ptotal=$_POST['ptotal'];
	$poriginalcost=$_POST['poriginalcost'];
	$psellingcost=$_POST['psellingcost'];
	$q30="insert into assets(pname, pdop, pavail, ptotal ,poriginalcost ,psellingcost) values('$pname', '$pdop', '$pavail', '$ptotal', '$poriginalcost', '$psellingcost')";
	$run30=mysqli_query($con,$q30);
	if($run30){
		$msg="<div class='alert alert-success p-2 mt-4'>Product Added Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger p-2 mt-4'>Product not Added</div>";
	}
}
?>
<div class="col-md-6 mt-4 ml-4 mb-5">
<div class="jumbotron">
<h3 align="center">Add New Product</h3>
<form action="" method="post">
<div class="form-group">
Name
<input type="text" name="pname" class="form-control" required>
</div>
<div class="form-group">
Date of Purchase
<input type="date" name="pdop" class="form-control" required>
</div>
<div class="form-group">
Available
<input type="text" name="pavail" class="form-control" required>
</div>
<div class="form-group">
Total
<input type="text" name="ptotal" class="form-control" required>
</div>
<div class="form-group">
Original Cost
<input type="text" name="poriginalcost" class="form-control" required>
</div>
<div class="form-group">
Selling Cost
<input type="text" name="psellingcost" class="form-control" required>
</div>
<div class="form-group text-center">
<input type="submit" class="btn btn-danger" name="sub30">
<a href="assets.php" class="btn btn-secondary">Close</a>
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