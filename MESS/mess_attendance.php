<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">


<form method="post" action="mess_attendance2.php">
      <h1 align="center">Mess  Attendance </h1>
      <hr>
 <table  align="center" width="300" height="300">
 	<tr>
 		<td>Block Name</td>
 		<td>
 			<select name="t2" style="width:200px;">

			<option value="SK"> SK </option>
			<option value="A"> A </option>
			<option value="M"> M </option>
			<option value="DRH"> DRH </option>

          </select></td>
 	</tr>
 	
 	
 	<tr>
 		<td></td>
 		<td><input type="submit" ></td>
 	</tr>
 	</table>
 </form>
<?php include('footer.php');?>
