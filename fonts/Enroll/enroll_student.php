<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="enroll_student_insert.php">
		<h1 align="center"> ENROLL STUDENT DETAILS</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
	
	<tr>
		<td>FIRST NAME</td>
		<td><input type="text" name="t1" placeholder="Enter your name" font-size="20" required></td>
	</tr>
	<tr>
		<td>LAST NAME</td>
		<td><input type="text" name="t2" required></td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="date" name="t3" required></td>
	</tr>
	<tr>
		<td>AGE</td>
		<td><input type="text" name="t4" required></td>
	</tr>
	<tr>
		<td>GENDER</td>
		<td>MALE<input type="radio" name="r">
		    FEMALE<input type="radio" name="r"></td>
	</tr>
	<tr>
		<td>C_ADDRESS</td>
		<td><input type="text" name="t5" required></td>
	</tr>
	<tr>
		<td>P_ADDRESS</td>
		<td><input type="text" name="t6" required></td>
	</tr>
	<tr>
		<td>PHONE</td>
		<td><input type="text" name="t7" required pattern="[6-9]{1}[0-9]{9}" title="enter valid phone number"></td>
	</tr>
	<tr>
		<td>MOBILE</td>
		<td><input type="text" name="t8" required pattern="[6-9]{1}[0-9]{9}" title="enter valid contact number"></td>
	</tr>
	<tr>
		<td>EMAIL</td>
		<td><input type="text" name="t9" required></td>
	</tr>
	<tr>
		<td>GAURDIAN_NAME</td>
		<td><input type="text" name="t10" required></td>
	</tr>
	<tr>
		<td>GAURDIAN_OCCUPATION</td>
		<td><input type="text" name="t11" required></td>
	</tr>
	<tr>
		<td>PARENT_CONTACT_NO</td>
		<td><input type="text" name="t12" required pattern="[6-9]{1}[0-9]{9}" title="enter valid contact number"></td>
	</tr>
	<tr>
		<td>COURSE</td>
		<td><input type="text" name="t13" required></td>
	</tr>
	<tr>
		<td>SEM</td>
		<td><input type="text" name="t14" required></td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>

</form>
<?php include('footer.php');?>