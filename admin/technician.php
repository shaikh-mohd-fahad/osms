<?php
define("PAGE","Technician");
define("Title","Technician");
include_once('../conn.php');
include_once('includes/header.php');
if(isset($_POST['sub23'])){
	$t_id=$_POST['t_id'];
	$q23="delete from technician where tech_id='$t_id'";
	$run23=mysqli_query($con,$q23);
}
?>
<div class="col-md-9 ml-4 mt-4 mb-5">
<p class="bg-dark text-white p-2 text-center">List of Technician</p>
<div class="table-responsive-md text-center">
<table class="table">
<tr>
<th>Technician ID</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>City</th>
<th>Action</th>
</tr>
<?php
$q22="select * from technician";
$run22=mysqli_query($con,$q22);
while($row22=mysqli_fetch_array($run22)){
?>
<tr>
<td><?php echo$row22['tech_id'];?></td>
<td><?php echo$row22['tech_name'];?></td>
<td><?php echo$row22['tech_mobile'];?></td>
<td><?php echo$row22['tech_email'];?></td>
<td><?php echo$row22['tech_city'];?></td>
<td>
<form action="editemp.php" method="post" class="d-inline">
<input type="hidden" name="t_id" value="<?php echo$row22['tech_id']; ?>">
<button type="submit" name="sub24" class="btn btn-info"><i class="fas fa-pen"></i></button>
</form>
<form action="" method="post" class="d-inline">
<input type="hidden" name="t_id" value="<?php echo$row22['tech_id']; ?>">
<button type="submit" name="sub23" class="btn btn-secondary"><i class="fas fa-trash"></i></button>
</form>
</td>
</tr>
<?php
}
?>
</table>
</div>
</div>

</div><!-- row ended -->
<div class="row">
<div class="col-sm-12 float-right">
<div class="float-right">
<a href="insertech.php" class="btn btn-danger"><i class="fas fa-plus"></i></a>
</div>
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