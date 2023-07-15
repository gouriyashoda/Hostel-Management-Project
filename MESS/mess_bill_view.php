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
			<th>No_OF_Presence</th>
			<th>Mess_Bill</th>
			<th>Payment_Status</th>
			<th>Month</th>
			<th>Year</th>
			<th>Date</th>
			<th>Action</th>
			<th>Update</th>

             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from mess_bill";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['no_of_presence'];?></td>
				<td><?php echo $row['mess_bill'];?></td>
				<td><?php echo $row['payment_status'];?></td>
				<td><?php echo $row['month'];?></td>
				<td><?php echo $row['year'];?></td>
				<td><?php echo $row['date'];?></td>
				<td><a href="mess_bill_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
				<td><a href="mess_bill_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>