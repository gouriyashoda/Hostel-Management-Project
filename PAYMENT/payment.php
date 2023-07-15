<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="payment_insert.php">
		<h1 align="center"> PAYMENT DETAILS</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
	
	<tr>
		<td>REGISTER_ID</td>
		<td><input type="text" name="t1" placeholder="Enter your reg_id" font-size="20" required></td>
	</tr>
	<tr>
		<td>TOTAL_AMOUNT</td>
		<td><input type="text" name="t2" required></td>
	</tr>
	<tr>
		<td>PAID</td>
		<td><input type="text" name="t3" required></td>
	</tr>
	<tr>
		<td>BALANCE</td>
		<td><input type="text" name="t4" required></td>
	</tr>
	<tr>
		<td>PAYMENT_DATE</td>
		<td><input type="date" name="t5" required></td>
	</tr>
	<tr>
		<td>MONTH</td>
		<td><input type="text" name="t6" required></td>
	</tr>
	<tr>
		<td>YEAR</td>
		<td><input type="text" name="t7" required=""></td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>

</form>
<?php include('footer.php');?>