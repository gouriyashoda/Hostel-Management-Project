<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="mess_bill_db.php">
		<?php
		$id=$_GET['id'];
		include('dbcon.php');
		$ss="select * from mess_bill where id='$id'";
		$rs=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($rs);
		?>
		<h1 align="center"> MESS_BILL DETAILS</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
    	<input type="hidden" name="id" value="<?php echo $id;?>">
	
	<tr>
		<td>REGISTER_ID</td>
		<td><input type="text" name="t1" value="<?php echo $row['reg_id'];?>" placeholder="Enter your reg_id" font-size="20" required></td>
	</tr>
	<tr>
		<td>NO_OF_PRESENCE</td>
		<td><input type="text" name="t2" value="<?php echo $row['no_of_presence'];?>" required></td>
	</tr>
	<tr>
		<td>MESS_BILL</td>
		<td><input type="text" name="t3" value="<?php echo $row['mess_bill'];?>" required></td>
	</tr>
	<tr>
		<td>PAYMENT_STATUS</td>
		<td><input type="text" name="t4" value="<?php echo $row['payment_status'];?>" required></td>
	</tr>
	<tr>
		<td>MONTH</td>
		<td><input type="text" name="t5" value="<?php echo $row['month'];?>" required></td>
	</tr>
	<tr>
		<td>YEAR</td>
		<td><input type="text" name="t6" value="<?php echo $row['year'];?>" required></td>
	</tr>
	<tr>
		<td>DATE</td>
		<td><input type="date" name="t7" value="<?php echo $row['date'];?>" required=""></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>

</form>
<?php include('footer.php');?>