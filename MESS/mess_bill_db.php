<?php
include('dbcon.php');
$id=$_POST['id'];
$reg_id=$_POST['t1'];
$no_of_presence=$_POST['t2'];
$mess_bill=$_POST['t3'];
$payment_status=$_POST['t4'];
$month=$_POST['t5'];
$year=$_POST['t6'];
$date=$_POST['t7'];
$ss="update mess_bill set id='$id',reg_id='$reg_id',no_of_presence='$no_of_presence',mess_bill='$mess_bill',payment_status='$payment_status',month='$month',year='$year',date='$date' where id='$id'";
$rs=mysqli_query($con,$ss);
?>
<script>
	 alert("updated Successfully");
	 document.location="mess_bill_view.php";
</script>