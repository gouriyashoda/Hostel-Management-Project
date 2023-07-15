<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from payment_info where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="payment_view.php";
</script>