<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

	<form method="post" action="registration_db.php">
		<?php
		$reg_id=$_GET['reg_id'];
		include('dbcon.php');
		$ss="select * from registration where reg_id='$reg_id'";
		$rs=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($rs);
		?>
		
	
	<h1 align="center">  Registration Form </h1>
	<hr>
 <table  align="center" width="300" height="300" align="center">
 	<input type="hidden" name="id" value="<?php echo $reg_id;?>">
 	<tr>
		<td>REG_ID</td>
		<td><input type="text" name="t1" value="<?php echo $row['reg_id'];?>"></td>
	</tr>
 	<tr>
 		<td>FULL NAME</td>
 		<td><input type="text" name="t2" value="<?php echo $row['full_name'];?>" required ></td>  
 	</tr>
 	<tr>
 		<td>CITY</td>
 		<td><input type="text" name="t3" value="<?php echo $row['city'];?>"></td>
 	</tr>
 	<tr>
 		<td>DISTRICT</td>
 		<td><input type="text" name="t4" value="<?php echo $row['district'];?>"></td>
 	</tr>

 	<tr>
 		<td>PERMANENT_ADDRESS</td>
 		<td><textarea name="t5" rows="3" cols="20" style="background-color: #ccc";><?php echo $row['permanant_address'];?></textarea></td>
 	</tr>
 	<tr>
 		<td>ADHAR_NO</td>
 		<td><input type="text" name="t6" value="<?php echo $row['adhar_no'];?>" required pattern="[0-9]{12}" title="Enter valid ADHAR_NO"></td>
 	</tr>
 	<tr>
 		<td>CONTACT_NO</td>
 		<td><input type="text" name="t7" value="<?php echo $row['contact_no'];?>" required pattern="[6-9]{1}[0-9]{9}" title="Enter vaLID NUMBER"></td>
 	</tr>
 	<tr>
 		<td>EMAIL</td>
 		<td><input type="EMAIL" name="e" value="<?php echo $row['email'];?>"></td>
 	</tr>
	<tr>
		<td>STATUS</td>
		<td><input type="text" name="t8" value="<?php echo $row['status'];?>"></td>
	</tr>
	

 	<tr>
 		<td></td>
 		<td><input type="submit"></td>
 	</tr>
 	
 </table>
<?php include('footer.php');?>