<?php
include('dbcon.php');
$full_name=$_POST['t1'];
$city=$_POST['t2'];
$district=$_POST['t3'];
$permanent_address=$_POST['t4'];
$aadhar_no=$_POST['t5'];
$contact_no=$_POST['t6'];
$email=$_POST['e'];
$status=$_POST['t8'];
$reg_id=$_POST['t9'];
$sql="insert into registration(full_name,city,district,permanent_address,aadhar_no,contact_no,email,status,reg_id)
      values('$full_name','$city','$district','$permanent_address','$aadhar_no','$contact_no,'$email','$status','$reg_id')";

$rs=mysqli_query($con,$sql);
if($rs)
{
	echo "Inserted successfully";
}
else
{
	echo "Not inserted";
}
?>