<?php
define("PAGE","Work Report");
define("Title","Work Report");
include_once('includes/header.php');
include_once('../conn.php');

?>
<div class="col-md-9 mt-4 ml-4">
<h5 class="text-center">Work Report Between</h5>
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
<div class="row">
<div class="col-md-12 mt-4">

<?php
if(isset($_POST['sub35'])){
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$q35="SELECT * from assignwork where requester_date BETWEEN '$startdate' and '$enddate'";
	$run35=mysqli_query($con,$q35);
}
 if(isset($run35)){?>
<div class="table-responsive-md">
<p class="bg-dark text-white text-center p-2">Details</p>
<table class="table text-center table-bordered">
<tr>
<th>Request ID</th>
<th>Request Info</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>Mobile</th>
<th>Technician</th>
<th>Assign Date</th>
</tr>
<?php
while($row25=mysqli_fetch_array($run35)){
?>
<tr>
<td><?php echo$row25['request_id'];?></td>
<td><?php echo$row25['request_info'];?></td>
<td><?php echo$row25['requester_name'];?></td>
<td><?php echo$row25['requester_add1'];?></td>
<td><?php echo$row25['requester_city'];?></td>
<td><?php echo$row25['requester_mobile'];?></td>
<td><?php echo$row25['assigntech'];?></td>
<td><?php echo$row25['requester_date'];?></td>
</tr>
<?php } ?>
<tr class="text-center"><td colspan="8"><button class="btn btn-danger" onclick="window.print()">Print</button></td></tr>
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