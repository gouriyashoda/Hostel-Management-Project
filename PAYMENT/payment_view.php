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
			<th>Total_amount</th>
			<th>Paid</th>
			<th>Balance</th>
			<th>Payment_date</th>
			<th>month</th>
			<th>year</th>
			<th>Action</th>
			<th>Update</th>
             			
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from payment_info";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['total_amount'];?></td>
				<td><?php echo $row['paid'];?></td>
				<td><?php echo $row['balance'];?></td>
				<td><?php echo $row['payment_date'];?></td>
				<td><?php echo $row['month'];?></td>
				<td><?php echo $row['year'];?></td>
				<td><a href="payment_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
				<td><a href="payment_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>