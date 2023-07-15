<?php
include('dbcon.php');
$reg_id=$_POST['t1'];
$about_service=$_POST['t2'];
$about_food=$_POST['t3'];
$cleaness=$_POST['t4'];
$sql="insert into feedback_form(reg_id,about_service,about_food,cleaness)
      values('$reg_id','$about_service','$about_food','$cleaness')";

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