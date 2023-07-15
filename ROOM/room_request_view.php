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
			<th>Reg_id</th>
			<th>Room_no</th>
			<th>Request_date</th>
			<th>Request_time</th>
			<th>Request_status</th>
			<th>Booking_status</th>
			<th>Action</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from room_request";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['room_no'];?></td>
				<td><?php echo $row['request_date'];?></td>
				<td><?php echo $row['request_time'];?></td>
				<td><?php echo $row['request_status'];?></td>
				<td><?php echo $row['booking_status'];?></td>
				<td><a href="room_request_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>