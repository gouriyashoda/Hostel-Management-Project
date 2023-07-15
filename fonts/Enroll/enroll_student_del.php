<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from enroll_student where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="enroll_student_view.php";
</script>