<?php
define("PAGE","Work Order");
define("Title","Work Order");
include_once('../conn.php');
include_once('includes/header.php');
$q15="select * from assignwork";
	$run15=mysqli_query($con,$q15);
if(isset($_POST['sub16'])){
	$id=$_POST['id'];
	$q16="delete from assignwork where request_id='$id'";
	$run16=mysqli_query($con,$q16);
	if($run16){
		echo"<script>location.href='workorder.php';</script>";
	}
}
?>
<div class="col-md-9 mt-5 ml-4">
<div class="table-responsive-md">
<table class="table">
<tr>
<th>Req ID</th>
<th>Req info</th>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>Mobile</th>
<th>Technician</th>
<th>Assign Date</th>
<th>Action</th>
</tr>
<?php
while($row15=mysqli_fetch_array($run15)){
?>
<tr>
<td><?php echo$row15['request_id'];?></td>
<td><?php echo$row15['request_info'];?></td>
<td><?php echo$row15['requester_name'];?></td>
<td><?php echo$row15['requester_add1'];?></td>
<td><?php echo$row15['requester_city'];?></td>
<td><?php echo$row15['requester_mobile'];?></td>
<td><?php echo$row15['assigntech'];?></td>
<td><?php echo$row15['requester_date'];?></td>
<td>
<form action="viewassignwork.php" class="d-inline" method="post">
<input type="hidden" name="id" value="<?php echo$row15['request_id'];?>">
<button type="submit" class="btn btn-warning" > <i class="far fa-eye"></i> </button>
</form>
<form action="" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row15['request_id'];?>">
 <button type="submit" name="sub16" class="btn btn-secondary"><i class=" far fa-trash-alt"></i> </button>
 </form>
 </td>
</tr>
<?php }?>
</table>
</div>
</div>
<?php
include_once('includes/footer.php');
?>