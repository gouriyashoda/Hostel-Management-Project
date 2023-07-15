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
			<th>Register_Id</th>
			<th>Date</th>
			<th>Attendance_status</th>
			<th>Year</th>
			<th>Action</th>
			<th>Update</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from attendence_details";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><?php echo $row['attendence_status'];?></td>
				<td><?php echo $row['year'];?></td>
				<td><a href="attendence_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
				<td><a href="attendence_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
			</tr>
			<?php
			$i++;
			
		}
		?>
		
	</table>
<?php include('footer.php');?>