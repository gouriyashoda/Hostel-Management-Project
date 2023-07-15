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
			<th>Username</th>
			<th>Password</th>
			<th>Utype</th>
			<th>Action</th>
             			
		</tr>
		<?php
		$i=1;
		include('dbcon.php');
		$sql="select * from login";
		$rs=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['utype'];?></td>
				<td><a href="login_del.php?username=<?php echo $row['username'];?>">Delete</a></td>
			</tr>
			<?php
			$i++;
		}
		?>
		
	</table>
<?php include('footer.php');?>