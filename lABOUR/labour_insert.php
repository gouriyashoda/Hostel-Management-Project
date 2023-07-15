<?php
include('dbcon.php');
$labour_name=$_POST['t1'];
$dob=$_POST['t2'];
$age=$_POST['t3'];
$address=$_POST['t4'];
$mobile=$_POST['t5'];
$email=$_POST['t6'];
$wages_per_day=$_POST['t7'];
$sql="insert into labour_details(labour_name,dob,age,address,mobile,email,wages_per_day)
      values('$labour_name','$dob','$age','$address','$mobile','$email','wages_per_day')";

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