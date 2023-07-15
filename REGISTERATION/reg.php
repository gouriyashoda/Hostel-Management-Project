<?php include('header.php');?>

	<div class="innerpages_banner">
		<h2>Registration Form</h2>
</div>

<div class="popular-section-wthree ">
	<div class="container">	
			
				<div class="service_top_grids">
			  <div class="col-md-4 service-grid1">
    <style>
    	body{
    		background-image: url('images/reg2.jpg');
    		color: black;
    		font-weight: bold;
    	}
    	table,td{
                
                border-collapse: collapse;
        }
        td{
                background-color: white;
        }
        
                input[type="text"]
                {
                        font-size: 20px;
                        width:170px;
                        height:25px;
                        background-color:#ccc;
                        border-radius:6px;
                }
                textarea{
                	font-size: 20px;
                        width:170px;
                        height:25px;
                        background-color:#ccc;
                        border-radius:6px;
                }
                input[type="email"]
                {
                        font-size: 20px;
                        width:170px;
                        height:25px;
                        background-color:#ccc;
                        border-radius:6px;
                }
                input[type="submit"]
                {
                        font-size: 20px;
                        font-weight: bold;
                        width:170px;
                        background-color:green;
                        color:white;
                        border-radius:8px;
                        height:35px
                } 
                input[type="date"]
                {
                	font-size: 20px;
                	width:170px;
                	background-color:#ccc;
                    border-radius:6px;
                }  
    </style>
  

	<form method="post" action="reg_insert.php">
 <table  align="center" width="400" height="500">
 	<tr>
		<td>REG_ID</td>
		<td><input type="text" style="background-color: white;" name="t1"></td>
	</tr>
 	<tr>
 		<td>FULL NAME</td>
 		<td><input type="text" style="background-color: white;" name="t2" required pattern="[A-Za-z\s]+" title="Enter characterns only"></td>  
 	</tr>
 	<tr>
 		<td>CITY</td>
 		<td><input type="text" style="background-color: white;" name="t3"></td>
 	</tr>
 	<tr>
 		<td>DISTRICT</td>
 		<td><input type="text" style="background-color: white;" name="t4"></td>
 	</tr>

 	<tr>
 		<td>PERMANENT_ADDRESS</td>
 		<td><textarea name="t5" style="background-color: white;border-radius: 6px;" required pattern="[A-Z\s]+" title="Enter block letters only"></textarea></td>
 	</tr>
 	<tr>
 		<td>ADHAR_NO</td>
 		<td><input type="text" name="t6" style="background-color: white;" required pattern="[0-9]{12}" title="Enter valid ADHAR_NO"></td>
 	</tr>
 	<tr>
 		<td>CONTACT_NO</td>
 		<td><input type="text" name="t7" style="background-color: white;" required pattern="[6-9]{1}[0-9]{9}" title="Enter vaLID NUMBER"></td>
 	</tr>
 	<tr>
 		<td>EMAIL</td>
 		<td><input type="EMAIL" name="e" style="background-color: white;border-radius: 6px;"></td>
 	</tr>
	<tr>
		<td>STATUS</td>
		<td><input type="text" style="background-color: white;" name="t8"></td>
	</tr>
	

 	<tr>
 		<td colspan="2" align="center"><input type="submit" style="height: 40px";></td>
 	</tr>
 	
 </table>
<?php include('footer.php');?>