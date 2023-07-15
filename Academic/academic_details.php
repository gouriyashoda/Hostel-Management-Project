<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
			  	
<form method="post" action="academic_insert.php">
      <h1 align="center">ACADEMIC DATAILS</h1>
      <hr>
 <table  align="center" width="300" height="300">
 	<tr>
 		<td>REG_ID</td>
 		<td><p><input type="text" name="t1"></p></td>
 	</tr>
 	<tr>
 		<td>YOJ</td>
 		<td><p><input type="date" name="d1"></p></td>
 	</tr>
 	<tr>
 		<td>COURSE</td>
 		<td><p><input type="text" name="t3"></p></td>
 	</tr>
 	<tr>
 		<td>SEM</td>
 		<td><p><input type="text" name="t4"></p></td>
 	</tr>
 	<tr>
 		<td>DATE OF ADMISSION</td>
 		<td><p><input type="date" name="d2"></p></td>
 	</tr>
 	<tr>
 		<td></td>
 		<td><input type="submit" ></td>
 	</tr>
 	</table>
 </form>
<?php include('footer.php');?>