<?php
include('dbcon.php');
$reg_id=$_POST['t1'];
$no_of_presence=$_POST['t2'];
$mess_bill=$_POST['t3'];
$payment_status=$_POST['t4'];
$month=$_POST['t5'];
$year=$_POST['t6'];
$date=$_POST['t7'];
$sql="insert into mess_bill(reg_id,no_of_presence,mess_bill,payment_status,month,year,date)
      values($reg_id','$no_of_presence','$mess_bill','$payment_status','$month','$year','$date')";

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