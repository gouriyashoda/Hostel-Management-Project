<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
			  	
<form method="post" action="academic_details_db.php">
	<?php
		$id=$_GET['id'];
		include('dbcon.php');
		$ss="select * from academic_details where id='$id'";
		$rs=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($rs);
		?>
      <h1 align="center">ACADEMIC DATAILS</h1>
      <hr>
 <table  align="center" width="300" height="300">
 	<input type="hidden" name="id" value="<?php echo $id;?>">
 	<tr>
 		<td>REG_ID</td>
 		<td><p><input type="text" name="t1" value="<?php echo $reg_id;?>"></p></td>
 	</tr>
 	<tr>
 		<td>YOJ</td>
 		<td><p><input type="date" name="d1" value="<?php echo $reg_id;?>"></p></td>
 	</tr>
 	<tr>
 		<td>COURSE</td>
 		<td><p><input type="text" name="t3" value="<?php echo $reg_id;?>"></p></td>
 	</tr>
 	<tr>
 		<td>SEM</td>
 		<td><p><input type="text" name="t4" value="<?php echo $reg_id;?>"></p></td>
 	</tr>
 	<tr>
 		<td>DATE OF ADMISSION</td>
 		<td><p><input type="date" name="d2" value="<?php echo $reg_id;?>"></p></td>
 	</tr>
 	<tr>
 		<td></td>
 		<td><input type="submit" ></td>
 	</tr>
 	</table>
 </form>
<?php include('footer.php');?>