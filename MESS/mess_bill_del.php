<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from mess_bill where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="mess_bill_view.php";
</script>