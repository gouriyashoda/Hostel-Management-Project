<?php
$reg_id=$_GET['reg_id'];
include('dbcon.php');
$sql="delete from registration where reg_id='$reg_id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="reg_insert_view.php";
</script>