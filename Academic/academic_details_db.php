<?php
include('dbcon.php');
$id=$_POST['id'];
$reg_id=$_POST['t1'];
$yoj=$_POST['d1'];
$course=$_POST['t3'];
$sem=$_POST['t4'];
$date_of_admission=$_POST['d2'];
$ss="update academic_details set id='$id',reg_id='$reg_id',yoj='$yoj',course='$course',sem='$sem',date_of_admission='$date_of_admission' where id='$id'";
$rs=mysqli_query($con,$ss);
?>
<script>
	 alert("updated Successfully");
	 document.location="academic_view.php";
</script>