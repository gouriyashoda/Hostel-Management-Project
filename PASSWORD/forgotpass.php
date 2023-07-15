<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body
		{
			background-image:url('images/login1.jpg');
			color: white;
			font-size: 20px;
		}
		background-image
		{
			filter: blur(8px);
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
			background-color: green;
			color: white;
			border-radius: 5px;
			height: 30px;
		}
	</style>

</head>
<body>
	<form method="post" action="forgotpass_con.php">
		<br><br><br><br><br>
		<h1 align="center">FORGOT PASSWORD</h1>
		<hr>
		<table cellpadding="15" align="center" width="200" height="200">
			<tr>
				<td>USERNAME</td>
				<td><input type="text" style="height: 35px;" name="t1" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" style="height: 40px;" value="Forgot password"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>