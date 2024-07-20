<?php
define("PAGE","Sell Report");
define("Title","Sell Report");
include_once('includes/header.php');
include_once('../conn.php');

?>
<div class="col-md-9 mt-4 ml-4">
<h5 class="text-center">Sell Report Between</h5>
<form class="form-inline d-print-none" action="" method="post">
<div class="form-group">
<input type="date" name="startdate" class="form-control mr-2" required>
</div>
to
<div class="form-group">
<input type="date" name="enddate" class="form-control ml-2" required>
</div>
<div class="form-group">
<input type="submit" name="sub35" class="btn btn-secondary ml-2" value="Search">
</div>
</form>
<div class="row mt-4">
<div class="col-md-12">
<?php
if(isset($_POST['sub35'])){
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$q35="SELECT * from customer where pdop BETWEEN '$startdate' and '$enddate'";
	$run35=mysqli_query($con,$q35);
}
 if(isset($run35)){?>
<div class="table-responsive-md">
<p class="bg-dark text-white text-center p-2">Details</p>
<table class="table text-center table-bordered">
<tr>
<th>Customer ID</th>
<th>Product Name</th>
<th> Name</th>
<th> Address</th>
<th>Quantity</th>
<th>Product Price</th>
<th>Total Price</th>
<th>Buying Date</th>
</tr>
<?php
while($row25=mysqli_fetch_array($run35)){
?>
<tr>
<td><?php echo$row25['cid'];?></td>
<td><?php echo$row25['pname'];?></td>
<td><?php echo$row25['cname'];?></td>
<td><?php echo$row25['caddress'];?></td>
<td><?php echo$row25['pquantity'];?></td>
<td><?php echo$row25['psellingcost'];?></td>
<td><?php echo$row25['ptotalprice'];?></td>
<td><?php echo$row25['pdop'];?></td>
</tr>
<?php } ?>
<tr class="text-center"><td colspan="8"><button class="btn btn-danger d-print-none" onclick="window.print()">Print</button></td></tr>
</table>
</div>
<?php
}
?>
</div>
</div>
</div>


</div><!-- row ended -->

<!-- link all script needed-->
<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>