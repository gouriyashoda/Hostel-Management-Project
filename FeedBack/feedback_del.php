<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from feedback_form where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="feedback_view.php";
</script>