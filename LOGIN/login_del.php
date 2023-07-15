<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from login where username='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="login_view.php";
</script>