<?php
include('dbcon.php');

$room_no=$_POST['t1'];
$block_name=$_POST['t2'];
$facilities=$_POST['t3'];
$total_members=$_POST['t4'];
$total_beds=$_POST['t5'];
$room_status=$_POST['t6'];

$sql="insert into room_datails(room_no,block_name,facilities,total_members,total_beds,remaining_beds,room_status)
      values('$room_no','$block_name','$facilities','$total_members','$total_beds','$total_beds','$room_status')";

      //echo $sql;

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