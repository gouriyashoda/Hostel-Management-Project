<?php include('admin_header.php');?>

	<div class="innerpages_banner">
		<h2>Academic details</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">

			  	<form method="post" action="mess_attendance_insert.php">
	<table width="700" border="1" cellpadding="10">
		<tr style="background-color:green;color:white">
			<th>Student Name</th>
			<th>sem</th>
			<th>Course</th>
			<th>Email </th>
			<th>Attendance Status </th>
			
			
             			
		</tr>
		<?php
		include('dbcon.php');
		$block_name=$_POST['t2'];
		session_start();
		$_SESSION['t2']=$block_name;

		$sql="select * from enroll_student where block_name='$block_name'";
		$rs=mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_array($rs))
		{
			?>
			<tr>
				<td><input type="text" name="t1<?php echo $i;?>" value="<?php echo $row['first_name']." ".$row['last_name'];?>"> </td>
				<td><input type="text" name="t2<?php echo $i;?>" value="<?php echo $row['sem'];?>"></td>
				<td><input type="text" name="t3<?php echo $i;?>" value="<?php echo $row['course'];?>"></td>
				<td><input type="text" name="t4<?php echo $i;?>" value="<?php echo $row['email'];?>"></td>
				<td>Present<input type="radio" name="r1<?php echo $i;?>" value="present" checked="">Absent<input type="radio" name="r1<?php echo $i;?>" value="absent"></td>
				
			
			</tr>
			<?php

			$i++;
			
		}
		?>

		 <tr>
            <td>  </td>
            <td> </td>
		 	<td> <input type="submit" name=""> </td>

		 </tr>
		
	</table>

</form>

<?php include('footer.php');?>