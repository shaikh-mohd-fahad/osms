<?php
define("PAGE","Dashboard");
define("Title","Dashboard");
include_once('includes/header.php');
include_once('../conn.php');
$q27="select * from technician";
$run27=mysqli_query($con,$q27);
$row_num_tech=mysqli_num_rows($run27);

$q28="select * from assignwork";
$run28=mysqli_query($con,$q28);
$row_num_assign=mysqli_num_rows($run28);

$q29="select * from request";
$run29=mysqli_query($con,$q29);
$row_num_request=mysqli_num_rows($run29);

?>
<div class="ml-5 col-md-9 col-sm-9 mb-4">
<div class="row "><!-- row start -->
<div class="col-md-4 mt-5"><!-- col-md-4 start -->
<div class="ml-2 card bg-danger text-white text-center pb-0" id="cardd"><!-- card start -->
<h6 class="card-header">Requests Received</h6>
<div class="card-body">
<p style="font-size:25px;"><?php echo$row_num_request;?></p>
<p><a href="requests.php" class="text-white mb-0 pb-0">View</a></p>
</div>
</div><!-- card end -->
</div><!-- col-md-4 end -->
<div class="col-md-4 mt-5"><!-- col-md-4 start -->
<div class="ml-2 card bg-success text-white text-center pb-0" id="cardd"><!-- card start -->
<h6 class="card-header">Assign Work</h6>
<div class="card-body">
<p style="font-size:25px;"><?php echo$row_num_assign;?></p>
<p><a href="workorder.php" class="text-white mb-0 pb-0">View</a></p>
</div>
</div><!-- card end -->
</div><!-- col-md-4 end -->
<div class="col-md-4 mt-5"><!-- col-md-4 start -->
<div class="ml-2 card bg-info text-white text-center pb-0" id="cardd"><!-- card start -->
<h6 class="card-header">No. of Technician</h6>
<div class="card-body">
<p style="font-size:25px;"><?php echo$row_num_tech;?></p>
<p><a href="technician.php" class="text-white mb-0 pb-0">View</a></p>
</div>
</div><!-- card end -->
</div><!-- col-md-4 end -->
</div><!-- row end -->
<div class="row mt-5">
<div class="col-md-12">
<p class="bg-dark text-white p-2 text-center">No. of Requester</p>
</div>
<div class="col-md-12">
<div class="table-responsive-md">
<table class="table text-center">
<tr><th>Requester Id</th><th>Name</th><th>Email</th></tr>
<?php
include_once('../conn.php');
$q5="select * from userlogin";
$run5=mysqli_query($con,$q5);

while($row5=mysqli_fetch_array($run5)){
?>
<tr>
<td><?php echo$row5['id'];?></td>
<td><?php echo$row5['name'];?></td>
<td><?php echo$row5['email'];?></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
<?php
include_once('includes/footer.php');
?>