<?php
include('dbcon.php');
$reg_id=$_POST['t1'];
$yoj=$_POST['d1'];
$course=$_POST['t3'];
$sem=$_POST['t4'];
$date_of_admission=$_POST['d2'];
$sql="insert into academic_details(reg_id,yoj,course,sem,date_of_admission)
      values('$reg_id','$yoj','$course','$sem','$date_of_admission')";

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