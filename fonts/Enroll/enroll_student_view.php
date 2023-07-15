<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
	<table width="400" height="100" border="1" cellpadding="10">
		<tr style="background-color: pink;color: black">
			<th>First_name</th>
			<th>Last_NAME</th>
			<th>DOB</th>
			<th>Age</th>
			<th>Gender</th>
			<th>C_Address</th>
			<th>P_Address</th>
			<th>Phone</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Gaurdian_name</th>
			<th>Gaurdian_Occupation</th>
			<th>Parent_contact_no</th>
			<th>Course</th>
			<th>Sem</th>
			<th>Action</th>
			<th>Update</th>

             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from enroll_student";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['first_name'];?></td>
				<td><?php echo $row['last_name'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['c_address'];?></td>
				<td><?php echo $row['p_address'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['gaurdian_name'];?></td>
				<td><?php echo $row['gaurdian_occupation'];?></td>
				<td><?php echo $row['parent_contact_no'];?></td>
				<td><?php echo $row['course'];?></td>
				<td><?php echo $row['sem'];?></td>
				<td><a href="enroll_student_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
				<td><a href="enroll_student_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>