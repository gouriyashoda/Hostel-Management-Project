<?php
include('dbcon.php');
session_start();
$username=$_POST['t1'];
$_SESSION['t1']=$username;
$ss="select * from login where username='$username'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs);

if(empty($row))
{
	echo"Invalid username";

}
else
{
	$otp=rand();
	$sql="insert into otp(otp,status)values('$otp','active')";
	mysqli_query($con,$sql);

$to = $username;
$subject = 'ONE TIME PASSWORD';
$message = 'Your OTP is-'.$otp;
$headers = "From: ranib2320@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {

   ?>
<script>
	alert("OTP has been sent to your EmailId");
	document.location="otp.php";
</script>
<?php

} else 
 {
   echo "ERROR";
}
}
?>