<?php
define("Page",'Submit Request');
define("Title",'Submit Request');
include_once('conn.php');
include_once('includes/header.php');
$q10="select * from request where id='{$_SESSION['id']}'";
$run10=mysqli_query($con,$q10);
$row10=mysqli_fetch_array($run10);

?>
<div class="col-md-5 ml-3 mt-5">
<div class="table-responsive-md">
<table class="table">
<tr><th>Request Id</th><td><?php echo$row10['id'];?></td></tr>
<tr><th>Request Info</th><td><?php echo$row10['request_info'];?></td></tr>
<tr><th>Request desc</th><td><?php echo$row10['request_desc'];?></td></tr>
<tr><th>Requester Name</th><td><?php echo$row10['requester_name'];?></td></tr>
<tr><th>Requester Address</th><td><?php echo$row10['requester_add1'];?></td></tr>
<tr><th>Requester Mobile Number</th><td><?php echo$row10['requester_mobile'];?></td></tr>
<tr><th>Request Submit Date</th><td><?php echo$row10['request_date'];?></td></tr>
</table>
<input type='button' class="btn btn-danger d-print-none" onclick="window.print()" value="Print">
<a href="submitrequest.php" class="btn d-print-none btn-secondary">Close</a>
</div>
</div>
<?php
include_once('includes/footer.php');
?>