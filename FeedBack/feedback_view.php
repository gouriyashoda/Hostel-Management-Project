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
			<th>About_service</th>
			<th>About_food</th>
			<th>Cleaness</th>
			<th>Action</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from feedback_form";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['reg_id'];?></td>
				<td><?php echo $row['about_service'];?></td>
				<td><?php echo $row['about_food'];?></td>
				<td><?php echo $row['cleaness'];?></td>
				<td><a href="feedback_del.php?id=<?php echo $row['id'];?>">Delete</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>