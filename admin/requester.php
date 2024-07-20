<?php
define("PAGE","Requester");
define("Title","Requester");
include_once('../conn.php');
include_once('includes/header.php');
$q18="select * from userlogin";
$run18=mysqli_query($con,$q18);
if(isset($_POST['sub19'])){
	$id=$_POST['id'];
	$q19="delete from userlogin where id='$id'";
	$run19=mysqli_query($con,$q19);
	if($run19){
		echo"<script>window.location='requester.php';</script>";
	}
}
?>
<div class="col-md-9 mt-4 ml-4 mb-5">
<p class="bg-dark text-white text-center p-2">List of Requester</p>
<div class="table-responsive-md">
<table class="table text-center">
<tr>
<th>Requester ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>
<?php
while($row18=mysqli_fetch_array($run18)){
?>
<tr>
<td><?php echo$row18['id'];?></td>
<td><?php echo$row18['name'];?></td>
<td><?php echo$row18['email'];?></td>
<td>
<form action="editreq.php" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row18['id'];?>">
<button class="btn btn-primary" name="" type="submit"><i class="fa fa-pen"></i></button>
</form>
<form action="" method="post" class="d-inline">
<input type="hidden" name="id" value="<?php echo$row18['id'];?>">
<button class="btn btn-secondary" name="sub19" type="submit"><i class="fa fa-trash"></i></button>
</form>
</td>
</tr>
<?php
}
?>
</table>
</div>
</div>

<?php
include_once('includes/footer.php');
?>