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
			<th>Reg_Id</th>
			<th>FULL NAME</th>
			<th>CITY</th>
			<th>DISTRICT</th>
			<th>PERMANENT_ADDRESS</th>
			<th>AADHAR_NO</th>
			<th>CONTACT_NO</th>
			<th>EMAIL</th>
			<th>STATUS</th>
			<th>Action</th>
			<th>Update</th>

             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from registration";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['full_name'];?></td>
				<td><?php echo $row['city'];?></td>
				<td><?php echo $row['district'];?></td>
				<td><?php echo $row['permanant_address'];?></td>
				<td><?php echo $row['adhar_no'];?></td>
				<td><?php echo $row['contact_no'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['status'];?></td>
				<td><a href="reg_del.php?reg_id=<?php echo $row['reg_id'];?>">Delete</a></td>
				<td><a href="reg_update.php?reg_id=<?php echo $row['reg_id'];?>">Edit</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>