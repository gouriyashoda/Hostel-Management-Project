<?php
include('dbcon.php');
$username=$_POST['t1'];
$password=$_POST['t2'];
$utype=$_POST['t3'];
$sql="insert into login(username,password,utype)
      values('$username','$password','$utype')";

$rs=mysqli_query($con,$sql);
if($rs)
{
    echo "Inserted successfully";
}
else
{
    echo "Not inserted";
}
?>