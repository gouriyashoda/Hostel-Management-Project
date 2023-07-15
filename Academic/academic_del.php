<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from academic_details where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="academic_view.php";
</script>