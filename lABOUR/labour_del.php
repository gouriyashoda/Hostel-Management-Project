<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from labour_details where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="labour_view.php";
</script>