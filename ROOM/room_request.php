<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="room_request_insert.php">
		<h1 align="center"> ROOM REQUEST</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
	
	<tr>
		<td>REG_ID</td>
		<td><input type="text" name="t1" placeholder="Enter your reg_id" font-size="20" required></td>
	</tr>
	<tr>
		<td>ROOM_NUMBER</td>
		<td><input type="text" name="t2" font-size="20" required></td>
	</tr>
	<tr>
		<td>REQUEST_DATE</td>
		<td><input type="date" name="t3" required></td>
	</tr>
	<tr>
		<td>REQUEST_TIME</td>
		<td><input type="text" name="t4" required></td>
	</tr>
	
	<tr>
		<td>REQUEST_STATUS</td>
		<td><input type="text" name="t5" required></td>
	</tr>
	<tr>
		<td>BOOKING_STATUS</td>
		<td><input type="text" name="t6" required></td>
	</tr>
	
	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>

</form>
<?php include('footer.php');?>
