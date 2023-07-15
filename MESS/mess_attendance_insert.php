<?php
include('dbcon.php');
session_start();
$block_name=$_SESSION['t2'];
$date=date('Y-m-d');
$month=date('m');
$year=date('Y');


		$sql="select * from enroll_student where block_name='$block_name'";
		$rs=mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_array($rs))
		{

			$name=$_POST['t1'.$i];
			$sem=$_POST['t2'.$i];
			$course=$_POST['t3'.$i];
			$email=$_POST['t4'.$i];
			$status=$_POST['r1'.$i];

			$ss="insert into attendence_details(reg_id,date,attendence_status,month,name,sem,course,year) values('$email','$date','$status','$month','$name','$sem','$course','$year')";

			mysqli_query($con,$ss);

			//echo $ss;

			$i++;

		}
 ?>