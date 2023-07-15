<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<table width="400" height="100" border="1" cellpadding="10">
		<tr style="background-color:green;color:white">
			<th>Room_no</th>
			<th>Block_name</th>
			<th>Facilities</th>
			<th>Toatl_members</th>
			<th>Total_beds</th>
			<th>Room_status</th>
			<th colspan="2" align="center" style="background-color:red">Action</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from room_datails";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['room_no'];?></td>
				<td><?php echo $row['block_name'];?></td>
				<td><?php echo $row['facilities'];?></td>
				<td><?php echo $row['total_members'];?></td>
				<td><?php echo $row['total_beds'];?></td>
				<td><?php echo $row['room_status'];?></td>
				<td><a href="room_details_del.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i></a></td>

				<td><a href="room_details_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i></a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>