<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from room_details where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="room_details_view.php";
</script>