<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body
		{
			background-color: #ccc;
		}
		input[type="text"]
		{
			width: 200px;
			height: 25px;
			background-color: #ccc;
			border-radius: 4px;
		}
		input[type="submit"]
		{
			width: 200px;
			height: 30px;
			background-color: green;
			border-radius: 5px;
			color: white;
		}

	</style>
</head>
<body>
	<form method="post" action="otp_con.php">
		<br><br><br><br><br>
		<h1 align="center">ENTER OTP</h1>
		<hr>
		<table cellpadding="5" align="center" width="400" height="200">
			<tr>
				<td>ENER OTP</td>
				<td><input type="text" name="t1"></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="reset.php"><input type="SUBMIT"></a></td>
			</tr>
			
		</table>
		
	</form>

</body>
</html>