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
	$cname=$_POST['cname'];
	$caddress=$_POST['caddress'];
	$pdop=$_POST['pdop'];
	$pavail=$_POST['pavail'];
	$pquantity=$_POST['pquantity'];
	$ptotalprice=$_POST['ptotalprice'];
	$psellingcost=$_POST['psellingcost'];
	$q32="insert into customer(pid, pname, cname, caddress, pdop, pavail, pquantity, ptotalprice, psellingcost) values('$pid', '$pname', '$cname', '$caddress', '$pdop', '$pavail', '$pquantity', '$ptotalprice', '$psellingcost')";
	$run32=mysqli_query($con,$q32);
	if($run32){
		$msg="<div class='alert alert-success p-2 mt-4'>Product Purchased Successfully</div>";
	}
	else{
		$msg="<div class='alert alert-danger p-2 mt-4'>Product not Purchased</div>";
	}
}
?>
<div class="col-md-6 mt-4 ml-4 mb-5">
<div class="jumbotron">
<h3 align="center">Customer Bill</h3>
<form action="" method="post">
<div class="form-group">
Product ID
<input type="text" name="pid" class="form-control" readonly value="<?php if(isset($row33['pid'])){echo$row33['pid'];}?>">
</div>
<div class="form-group">
Customer Name
<input type="text" name="cname" class="form-control">
</div>
<div class="form-group">
Customer Address
<input type="text" name="caddress" class="form-control">
</div>
<div class="form-group">
Product Name
<input type="text" name="pname" class="form-control" required value="<?php if(isset($row33['pname'])){ echo$row33['pname'];}?>">
</div>
<div class="form-group">
Available Product
<input type="text" name="pavail" class="form-control" required value="<?php if(isset($row33['pavail'])){ echo$row33['pavail'];}?>" readonly>
</div>
<div class="form-group">
Quantity
<input type="text" name="pquantity" class="form-control" required>
</div>
<div class="form-group">
Price of Each Product
<input type="text" name="psellingcost" class="form-control" required value="<?php if(isset($row33['psellingcost'])){ echo$row33['psellingcost'];}?>">
</div>
<div class="form-group">
Total Price
<input type="text" name="ptotalprice" class="form-control" required>
</div>
<div class="form-group">
Date of Purchase
<input type="date" name="pdop" class="form-control" required>
</div>
<div class="form-group text-center">
<input type="submit" class="btn btn-danger" name="sub32">
<a href="assets.php" class="btn btn-secondary">Close</a>
</div>
</form>
<?php
if(isset($msg)){echo$msg;}
?>
</div>
</div>

<?php
include_once('includes/footer.php');
?>