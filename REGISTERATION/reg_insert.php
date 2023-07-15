<?php
include('dbcon.php');
$reg_id=$_POST['t1'];
$full_name=$_POST['t2'];
$city=$_POST['t3'];
$district=$_POST['t4'];
$permanant_address=$_POST['t5'];
$adhar_no=$_POST['t6'];
$contact_no=$_POST['t7'];
$email=$_POST['e'];
$status=$_POST['t8'];
$sql="insert into registration(reg_id,full_name,city,district,permanant_address,adhar_no,contact_no,email,status)
      values('$reg_id','$full_name','$city','$district','$permanant_address','$adhar_no','$contact_no','$email','$status')";

      
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