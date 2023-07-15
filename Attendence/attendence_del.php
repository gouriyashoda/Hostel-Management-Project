<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from attendence_details where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="attendence_view.php";
</script>