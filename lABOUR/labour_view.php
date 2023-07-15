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
			<th>Labour_name</th>
			<th>DOB</th>
			<th>Age</th>
			<th>Address</th>
			<th>mobile</th>
			<th>Email</th>
			<th>Wages_per_day</th>
			<th>Action</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from labour_details";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['labour_name'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['wages_per_day'];?></td>
				<td><a href="labour_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>