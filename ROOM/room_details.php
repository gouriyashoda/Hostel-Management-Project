<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="room_details_insert.php">
		<h1 align="center"> ROOM DETAILS</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
	
	<tr>
		<td>ROOM_NUMBER</td>
		<td><input type="text" name="t1" placeholder="Enter your room no" font-size="20" required></td>
	</tr>
	<tr>
		<td>BLOCK_NAME</td>
		<td><select name="t2" style="width:200px;">

			<option value="SK"> SK </option>
			<option value="A"> A </option>
			<option value="M"> M </option>
			<option value="DRH"> DRH </option>

          </select>
		</td>
	</tr>
	<tr>
		<td>FACILITIES</td>
		<td><input type="text" name="t3" required></td>
	</tr>
	<tr>
		<td>TOTAL_MEMBERS</td>
		<td><input type="text" name="t4" required></td>
	</tr>
	
	<tr>
		<td>TOTAL_BEDS</td>
		<td><input type="text" name="t5" required></td>
	</tr>
	<tr>
		<td>ROOM_STATUS</td>
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
