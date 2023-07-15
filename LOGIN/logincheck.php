<?php
include('dbcon.php');
$username=$_POST['t1'];
$password=$_POST['t2'];
$sql="select * from login where username='$username'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);

if(empty($row))
{
	?>
	<script>
             	alert("Invalid Username");
             	document.location="index.html";
             </script>


<?php
}
else
{
	$upass=$row['password'];
	$utype=$row['utype'];
	if($password==$upass)
	{
		if($utype=="admin")
		{
			?>
             <script>
             	alert("You have logged in as Admin");
             	document.location="admin_home.php";
             </script>
			<?php
		}
		if($utype=="user")
		{
			?>
             <script>
             	alert("You have logged in as Admin");
             	document.location="admin_home.php";
             </script>
			<?php
		}

		if($utype=="mess")
		{
			?>
             <script>
             	alert("You have logged in as Mess Manager");
             	document.location="manager_home.php";
             </script>
			<?php
		}


		if($utype=="guest")
		{
			?>
             <script>
             	alert("You have logged in as Guest");
             	document.location="guest_home.php";
             </script>
			<?php
		}

	}
	else
	{
		?>
             <script>
             	alert("Invalid Password");
             	document.location="index.html";
             </script>
			<?php
	}
}
?>