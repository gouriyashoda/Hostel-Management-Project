<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>LOGIN FORM</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
			  	<style>
		body
		{
			background-color: #ccc;
			align-content: center;
		}
		input[type="text"]
		{
			width: 200px;
			height: 25px;
			background-color: #ccc;
			border-radius: 4px;
		}
		input[type="passworod"]
		{
			width: 200px;
			height: 25px;
			background-color: #ccc;
			border-radius: 4px;
		}
		input[type="submit"]
		{
			width: 200px;
			background-color: green;
			color: white;
			border-radius: 5px;
			height: 30px;
		}
	</style>

	<form method="post" action="logincheck.php"><br><br><br>


	     <table width="500" height="300">

	     	<tr>
	     		<td> Username </td>
		
		<td><input type="text" name="t1" placeholder="Username"></td>
		</tr>
		<tr>
		<td> Password </td>	
    	<td><input type="password" name="t2" placeholder="Password"></td>
         </tr>

         <tr>
         	<td> </td>
    	<td> <input type="submit" value="LOGIN"> </td>
    </tr>

         <tr>  

         	<td><a href="forgotpass.php">FORGOT PASSWORD?</a>  </td>
         	<td>  New user?<a href="reg.php">Register</a> </td>

         </tr>
</table>
    
    	
    
	</form>
 <?php include('footer.php');?>