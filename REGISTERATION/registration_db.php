<?php
include('dbcon.php');
$id=$_POST['id'];
$reg_id=$_POST['t1'];
$full_name=$_POST['t2'];
$city=$_POST['t3'];
$district=$_POST['t4'];
$permanant_address=$_POST['t5'];
$adhar_no=$_POST['t6'];
$contact_no=$_POST['t7'];
$email=$_POST['e'];
$status=$_POST['t8'];
$ss="update registration set reg_id='$reg_id',full_name='$full_name',city='$city',district='$district',permanant_address='$permanant_address',adhar_no='$adhar_no',contact_no='$contact_no',email='$email',status='$status' where reg_id='$id'";
$rs=mysqli_query($con,$ss);
?>
<script>
	 alert("updated Successfully");
	 document.location="reg_insert_view.php";
</script>