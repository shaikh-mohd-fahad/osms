<?php
define("PAGE","Assets");
define("Title","Assets");
include_once('../conn.php');
include_once('includes/header.php');
$q29="select *  from assets";
if(isset($_POST['sub31'])){
	$id=$_POST['id'];
	$q31="delete from assets where pid='$id'";
	$run31=mysqli_query($con,$q31);
}
$run29=mysqli_query($con,$q29);
$row_num29=mysqli_num_rows($run29);
?>
<div class="col-sm-9 ml-4 mt-5 mb-5">
<p class="bg-dark text-white p-2 text-center">Product/Part Details</p>
<?php
if($row_num29>0){
?>
<div class="table-responsive-md">
<table class="table text-center">
<tr>
<th>Product ID</th>
<th>Name</th>
<th>DOP</th>
<th>Available</th>
<th>Total</th>
<th>Original Cost</th>
<th>Selling Cost</th>
<th>Action</th>
</tr>
<?php
while($row29=mysqli_fetch_array($run29)){
?>
<tr>
<td><?php echo$row29['pid'];?></td>
<td><?php echo$row29['pname'];?></td>
<td><?php echo$row29['pdop'];?></td>
<td><?php echo$row29['pavail'];?></td>
<td><?php echo$row29['ptotal'];?></td>
<td><?php echo$row29['poriginalcost'];?></td>
<td><?php echo$row29['psellingcost'];?></td>
<td>
<form action="editassets.php" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row29['pid'];?>">
<button type="submit" class="btn btn-info" name=""><i class="fas fa-pen"></i></button>
</form>
<form action="" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row29['pid'];?>">
<button type="submit" class="btn btn-secondary" name="sub31"><i class="fas fa-trash"></i></button>
</form>
<form action="sellassets.php" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row29['pid'];?>">
<button type="submit" class="btn btn-success" name=""><i class="fas fa-handshake"></i></button>
</form>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php
}
else{
	echo"0 result";
}
?>
</div>
</div><!-- row ended -->

<div class="row">
<div class="col-sm-12">
<div class="float-right"><a href="addassets.php" class="btn btn-danger"><i class="fas fa-plus"></i></a></div>
</div>
</div>

</div>

<!-- link all script needed-->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>