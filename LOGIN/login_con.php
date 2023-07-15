<?php
include('dbcon.php');
$username=$_POST['t1'];
$password=$_POST['t2'];


$sql="insert into login(username,password,user_type)
      values=('$username','$password','$user_type')";
 $rs=mysqli_query($con,$sql);
 if($rs)
 {
 	echo "Inserted seccussfully";
 }
 else
 {
 	echo "Not Inserted";
 }
 ?>