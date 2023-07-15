<?php
include('dbcon.php');

$otp=$_POST['t1'];
$ss="select * from otp where otp='$otp'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs);

if(empty($row))
{
	echo"Invalid OTP";

}
else
{
	
	$sql="update otp set status='inactive' where otp='$otp'";
	mysqli_query($con,$sql);
?>
<script>
	alert("OTP varification has been successfully");
	document.location="reset.php";
</script>
<?php
}
?>