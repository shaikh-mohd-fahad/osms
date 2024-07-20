<?php
define("PAGE","Work Order");
define("Title","Work Order");
include_once('../conn.php');
include_once('includes/header.php');
$id=$_POST['id'];
$q17="select * from assignwork where request_id='$id'";
$run17=mysqli_query($con,$q17);
$row17=mysqli_fetch_array($run17);
?>
<div class="col-md-6 mt-5 ml-4 mb-5">
<h2 class="text-center">Assign Work Details</h2>
<div class="table-responsive-md">
<table class="table table-bordered">
<tr>
<th>Req ID</th> <td><?php echo$row17['request_id'];?></td>
</tr>
<tr>
<th>Req info</th> <td><?php echo$row17['request_info'];?></td>
</tr>
<tr>
<th>Req desc</th> <td><?php echo$row17['request_desc'];?></td>
</tr>
<tr>
<th>Name</th> <td><?php echo$row17['requester_name'];?></td>
</tr>
<tr>
<th>Email</th> <td><?php echo$row17['requester_email'];?></td>
</tr>
<tr>
<th>Address 1</th> <td><?php echo$row17['requester_add1'];?></td>
</tr>
<tr>
<th>Address 1</th> <td><?php echo$row17['requester_add2'];?></td>
</tr>
<tr>
<th>City</th> <td><?php echo$row17['requester_city'];?></td>
</tr>
<tr>
<th>State</th> <td><?php echo$row17['requester_state'];?></td>
</tr>
<tr>
<th>ZIP</th> <td><?php echo$row17['requester_zip'];?></td>
</tr>
<tr>
<th>Mobile</th> <td><?php echo$row17['requester_mobile'];?></td>
</tr>
<tr>
<th>Technician</th> <td><?php echo$row17['assigntech'];?></td>
</tr>
<tr>
<th>Assign Date</th> <td><?php echo$row17['requester_date'];?></td>
</tr>
<tr>
<th>Technician Signature</th> <td></td>
</tr>
<tr>
<th>Customer Signature</th><td></td>
</tr>
</table>
</div>
<button class="btn btn-danger" onclick="window.print()" type="button">Print</button>
<a href="workorder.php" class="ml-2 btn btn-secondary">Close</a>
</div>
<?php
include_once('includes/footer.php');
?>