<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="enroll_student_db.php">
		<?php
		$id=$_GET['id'];
		include('dbcon.php');
		$ss="select * from enroll_student where id='$id'";
		$rs=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($rs);
		?>
		<h1 align="center"> ENROLL STUDENT DETAILS</h1>
		<hr>

    <table border="1" cellpadding="10" height="400" width="400" align="center">
	
	<tr>
		<td>FIRST NAME</td>
		<td><input type="text" name="t1" value="<?php echo $row['first_name'];?>" placeholder="Enter your name" font-size="20" required></td>
	</tr>
	<tr>
		<td>LAST NAME</td>
		<td><input type="text" name="t2" value="<?php echo $row['last_name'];?>" required></td>
	</tr>
	<tr>
		<td>DOB</td>
		<td><input type="date" name="t3" value="<?php echo $row['dob'];?>" required></td>
	</tr>
	<tr>
		<td>AGE</td>
		<td><input type="text" name="t4" value="<?php echo $row['age'];?>" required></td>
	</tr>
	<tr>
		<td>GENDER</td>
		<td><input type="text" name="r" value="<?php echo $row['gender'];?>" required></td>
	</tr>
	<tr>
		<td>C_ADDRESS</td>
		<td><input type="text" name="t5" value="<?php echo $row['c_address'];?>" required></td>
	</tr>
	<tr>
		<td>P_ADDRESS</td>
		<td><input type="text" name="t6" value="<?php echo $row['p_address'];?>" required></td>
	</tr>
	<tr>
		<td>PHONE</td>
		<td><input type="text" name="t7" value="<?php echo $row['phone'];?>" required pattern="[6-9]{1}[0-9]{9}" title="enter valid phone number"></td>
	</tr>
	<tr>
		<td>MOBILE</td>
		<td><input type="text" name="t8" value="<?php echo $row['mobile'];?>" required pattern="[6-9]{1}[0-9]{9}" title="enter valid contact number"></td>
	</tr>
	<tr>
		<td>EMAIL</td>
		<td><input type="text" name="t9" value="<?php echo $row['email'];?>" required></td>
	</tr>
	<tr>
		<td>GAURDIAN_NAME</td>
		<td><input type="text" name="t10" value="<?php echo $row['gaurdian_name'];?>" required></td>
	</tr>
	<tr>
		<td>GAURDIAN_OCCUPATION</td>
		<td><input type="text" name="t11" value="<?php echo $row['gaurdian_occupation'];?>" required></td>
	</tr>
	<tr>
		<td>PARENT_CONTACT_NO</td>
		<td><input type="text" name="t12" value="<?php echo $row['parent_contact_no'];?>" required pattern="[6-9]{1}[0-9]{9}" title="enter valid contact number"></td>
	</tr>
	<tr>
		<td>COURSE</td>
		<td><input type="text" name="t13" value="<?php echo $row['course'];?>" required></td>
	</tr>
	<tr>
		<td>SEM</td>
		<td><input type="text" name="t14" value="<?php echo $row['sem'];?>" required></td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="submit">
		</td>
	</tr>

</form>
<?php include('footer.php');?>