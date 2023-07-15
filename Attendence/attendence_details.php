<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Attendence details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
	<form method="post" action="attendence_insert.php">

    
	<h1 align="center">  ATTENDANCE DETAILS </h1>
	<hr>
	<table border="1" cellpadding="10" height="400" width="400" align="center">
	<tr>
		<td>DATE</td>
		<td><input type="DATE" name="t1" required></td>
	</tr>
	<tr>
		<td>REG_ID</td>
		<td><input type="text" name="t2" placeholder="Enter your REG_ID" font-size="20" required></td>
	</tr>
	<tr>
		<td>NAME</td>
		<td><input type="text" name="t3" required></td>
	</tr>
	<tr>
		<td>SEM</td>
		<td><input type="text" name="t4" required></td>
	</tr>
	<tr>
		<td>COURSE</td>
		<td><input type="text" name="t5" required></td>
	</tr>
	<tr>
		<td>MONTH</td>
		<td><input type="text" name="t6" required></td>
	</tr>
	<tr>
		<td>YEAR</td>
		<td><input type="text" name="t7" required></td>
	</tr>
	<tr>
		<td>ATTENDENCE_STATUS</td>
		<td><input type="text" name="t8" required></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>
</form>
<?php include('footer.php');?>