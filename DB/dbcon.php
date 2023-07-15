<?php
$con=mysqli_connect("localhost","root","");
$rs=mysqli_select_db($con,"hostel");
if(!$rs)
{
	echo"database couldnot be connected";
}
?>

