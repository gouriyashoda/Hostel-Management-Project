<?php
include('dbcon.php');

$reg_id=$_POST['t1'];
$total_amount=$_POST['t2'];
$paid=$_POST['t3'];
$balance=$_POST['t4'];
$payment_date=$_POST['t5'];
$month=$_POST['t6'];
$year=$_POST['t7'];

$sql="insert into payment_info(reg_id,total_amount,paid,balance,payment_date,month,year)
      values('$reg_id','$total_amount','$paid','$balance','$payment_date','$month','$year')";
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