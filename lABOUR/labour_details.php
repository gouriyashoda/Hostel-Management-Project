<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">


<form method="post" action="labour_insert.php">
      <h1 align="center">LABOUR DATAILS</h1>
      <hr>
 <table  align="center" width="300" height="300">
 	<tr>
 		<td>LABOUR_NAME</td>
 		<td><p><input type="text" name="t1"></p></td>
 	</tr>
 	<tr>
 		<td>DOB</td>
 		<td><p><input type="date" name="t2"></p></td>
 	</tr>
 	<tr>
 		<td>AGE</td>
 		<td><p><input type="text" name="t3"></p></td>
 	</tr>
 	<tr>
 		<td>ADDRESS</td>
 		<td><p><textarea name="t4"></textarea></p></td>
 	</tr>
 	<tr>
 		<td>MOBILE</td>
 		<td><p><input type="text" name="t5"></p></td>
 	</tr>
 	<tr>
 		<td>EMAIL</td>
 		<td><p><input type="text" name="t6"></p></td>
 	</tr>
 	<tr>
 		<td>WAGES_PER_DAY</td>
 		<td><p><input type="text" name="t7"></p></td>
 	</tr>
 	<tr>
 		<td></td>
 		<td><input type="submit" ></td>
 	</tr>
 	</table>
 </form>
<?php include('footer.php');?>
