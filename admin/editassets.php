<?php
define("PAGE","Assets");
define("Title","Assets");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['id'])){
	$id=$_POST['id'];
	$q33="select * from assets where pid='$id'";
	$run33=mysqli_query($con,$q33);
	$row33=mysqli_fetch_array($run33);
}
if(isset($_POST['sub32'])){
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pdop=$_POST['pdop'];
	$pavail=$_POST['pavail'];
	$ptotal=$_POST['ptotal'];
	$poriginalcost=$_POST['poriginalcost'];
	$psellingcost=$_POST['psellingcost'];
	$q30="update assets set pname='$pname', pavail='$pavail', pdop='$pdop', ptotal='$ptotal', poriginalcost='$poriginalcost', psellingcost='$psellingcost' where pid='$pid'";
	$run30=mysqli_query($con,$q30);
	if($run30){
		$msg="<div class='alert alert-success p-2 mt-4'>Product Updated Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger p-2 mt-4'>Product not Updated</div>";
	}
}
?>
<div class="col-md-6 mt-4 ml-4 mb-5">
<div class="jumbotron">
<h3 align="center">Edit Product</h3>
<form action="" method="post">
<div class="form-group">
Product ID
<input type="text" name="pid" class="form-control" readonly value="<?php if(isset($row33['pid'])){echo$row33['pid'];}?>">
</div>
<div class="form-group">
Name
<input type="text" name="pname" class="form-control" required value="<?php if(isset($row33['pname'])){ echo$row33['pname'];}?>">
</div>
<div class="form-group">
Date of Purchase
<input type="date" name="pdop" class="form-control" required value="<?php if(isset($row33['pdop'])){ echo$row33['pdop'];}?>">
</div>
<div class="form-group">
Available
<input type="text" name="pavail" class="form-control" required value="<?php if(isset($row33['pavail'])){ echo$row33['pavail'];}?>">
</div>
<div class="form-group">
Total
<input type="text" name="ptotal" class="form-control" required value="<?php if(isset($row33['ptotal'])){ echo$row33['ptotal'];}?>">
</div>
<div class="form-group">
Original Cost
<input type="text" name="poriginalcost" class="form-control" required value="<?php if(isset($row33['poriginalcost'])){ echo$row33['poriginalcost'];}?>">
</div>
<div class="form-group">
Selling Cost
<input type="text" name="psellingcost" class="form-control" required value="<?php if(isset($row33['psellingcost'])){ echo$row33['psellingcost'];}?>">
</div>
<div class="form-group text-center">
<input type="submit" class="btn btn-danger" name="sub32">
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