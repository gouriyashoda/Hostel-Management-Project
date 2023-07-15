<?php
include('dbcon.php');
session_start();
$newpass=$_POST['t1'];
$confirmpass=$_POST['t2'];

 
   if($newpass==$confirmpass)
   {
   	$uname=$_SESSION['t1'];
	$sql="update login set password='$newpass' where username='$uname'";
	mysqli_query($con,$sql);
	 echo"password has been changed successfully";
	}
	else
	{
		echo"new password and confirm pasword must be same";
	}
?>