<?php
include('dbcon.php');
$id=$_POST['id'];
$reg_id=$_POST['t1'];
$total_amount=$_POST['t2'];
$paid=$_POST['t3'];
$balance=$_POST['t4'];
$payment_date=$_POST['t5'];
$month=$_POST['t6'];
$year=$_POST['t7'];
$ss="update payment_info set id='$id',reg_id='$reg_id',total_amount='$total_amount',paid='$paid',balance='$balance',payment_date='$payment_date',month='$month',year='$year' where id='$id'";
$rs=mysqli_query($con,$ss);
?>
<script>
	 alert("updated Successfully");
	 document.location="payment_view.php";
</script>