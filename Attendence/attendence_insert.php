<?php
include('dbcon.php');
$date=$_POST['t1'];
$reg_id=$_POST['t2'];
$name=$_POST['t3'];
$sem=$_POST['t4'];
$course=$_POST['t5'];
$month=$_POST['t6'];
$year=$_POST['t7'];
$attendence_status=$_POST['t8'];
$sql="insert into attendence_details(date,reg_id,name,sem,course,month,year,attendence_status)
      values('$date','$reg_id','$name','$sem','$course','$month','$year','$attendence_status')";
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