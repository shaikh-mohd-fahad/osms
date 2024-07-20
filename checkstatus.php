<?php
define("Page",'Check Status');
define("Title",'Check Status');
include_once('includes/header.php');
include_once('conn.php');
if(isset($_POST['sub36'])){
	$checkstatus=$_POST['checkstatus'];
	$q36="select * from assignwork where request_id='$checkstatus'";
	$run36=mysqli_query($con,$q36);
	$row36=mysqli_fetch_array($run36);
}
?>
<div class="col-md-9 col-sm-10 mt-5 ml-4 mb-5">
<form action="" class="d-print-none" method="post">

<div class="form-group">
Enter Request Id
<input type="text" name="checkstatus" class="form-control">
</div>
<div class="form-group">
<input type="submit" value="Submit" name="sub36" class="btn btn-danger">
</div>
</form>
<?php if(isset($run36)){?>
<div class="row mt-4">
<div class="col-md-8">
<?php if(mysqli_num_rows($run36)>0){?>
<h5 class="text-center">Assigned Work Details</h5>
<div class="table-responsive-md ">
<table class="table table-bordered">
<tr><th>Request ID</th><td><?php echo$row36['request_id'];?></td></tr>
<tr><th>Request Info</th><td><?php echo$row36['request_info'];?></td></tr>
<tr><th>Request Desc</th><td><?php echo$row36['request_desc'];?></td></tr>
<tr><th>Name</th><td><?php echo$row36['requester_name'];?></td></tr>
<tr><th>Address 1</th><td><?php echo$row36['requester_add1'];?></td></tr>
<tr><th>Address 2</th><td><?php echo$row36['requester_add2'];?></td></tr>
<tr><th>City</th><td><?php echo$row36['requester_city'];?></td></tr>
<tr><th>State</th><td><?php echo$row36['requester_state'];?></td></tr>
<tr><th>ZIP</th><td><?php echo$row36['requester_zip'];?></td></tr>
<tr><th>Email</th><td><?php echo$row36['requester_email'];?></td></tr>
<tr><th>Mobile</th><td><?php echo$row36['requester_mobile'];?></td></tr>
<tr><th>Assign Date</th><td><?php echo$row36['requester_date'];?></td></tr>
<tr><th>Technician</th><td><?php echo$row36['assigntech'];?></td></tr>
<tr><th>Customer Sign</th><td></td></tr>
<tr><th>Technician Sign</th><td></td></tr>
</table>

</div>
<div class="text-center">
<button class="btn btn-danger d-print-none" onclick="window.print()">Print</button>
</div>
</div>
<?php 
}
else{
	echo"<div class='alert alert-info'>Your Request is in Pending</div>";
}
 ?>
</div>
<?php } ?>
</div>

<?php
include_once('includes/footer.php');
?>