<?php
$id=$_GET['id'];
include('dbcon.php');
$sql="delete from room_request where id='$id'";
mysqli_query($con,$sql);
?>
<script>
	alert("Deleted successfully");
	document.location="room_request_view.php";
</script>