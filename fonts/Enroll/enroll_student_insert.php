<?php
include('dbcon.php');
$first_name=$_POST['t1'];
$last_name=$_POST['t2'];
$dob=$_POST['t3'];
$age=$_POST['t4'];
$gender=$_POST['r'];
$c_address=$_POST['t5'];
$p_address=$_POST['t6'];
$phone=$_POST['t7'];
$mobile=$_POST['t8'];
$email=$_POST['t9'];
$gaurdian_name=$_POST['t10'];
$gaurdian_occupation=$_POST['t11'];
$parent_contact_no=$_POST['t12'];
$course=$_POST['t13'];
$sem=$_POST['t14'];
$sql="insert into enroll_student(first_name,last_name,dob,age,gender,c_address,p_address,phone,mobile,email,gaurdian_name,gaurdian_occupation,parent_contact_no,course,sem)
      values('$first_name','$last_name','$dob','$age','$gender','$c_address','$p_address','$phone','$mobile','$email','$gaurdian_name','$gaurdian_occupation','$parent_contact_no','$course','$sem')";

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