<?php
include('dbcon.php');

$reg_id=$_POST['t1'];
$room_no=$_POST['t2'];
$request_date=$_POST['t3'];
$request_time=$_POST['t4'];
$request_status=$_POST['t5'];
$booking_status=$_POST['t6'];

$sql="insert into room_request(reg_id,room_no,request_date,request_time,request_status,booking_status)
      values('$reg_id','$room_no','$request_date','$request_time','$request_status','$booking_status')";
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