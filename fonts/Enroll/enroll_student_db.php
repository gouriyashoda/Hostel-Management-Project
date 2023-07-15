<?php
include('dbcon.php');
$id=$_POST['id'];
$first_name=$_POST['t1'];
$last_name=$_POST['t2'];
$dob=$_POST['t3'];
$age=$_POST['t4'];
$gender=$_POST['r'];
$c_address=$_POST['t5'];
$p_address=$_POST['t6'];
$phone=$_POST['t7'];
$mobile=$_POST['t8'];
$email=$_POST['t9'];
$gaurdian_name=$_POST['t10'];
$gaurdian_occupation=$_POST['t11'];
$parent_contact_no=$_POST['t12'];
$course=$_POST['t13'];
$sem=$_POST['t14'];
$ss="update enroll_student set id='$id',first_name='$first_name',last_name='$last_name',dob='$dob',age='$age',gender='$gender',c_address='$c_address',p_address='$p_address',phone='$phone',mobile='$mobile',email='$email',gaurdian_name='$gaurdian_name',gaurdian_occupation='$gaurdian_occupation',parent_contact_no='$parent_contact_no',course='$course',sem='$sem' where id='$id'";
$rs=mysqli_query($con,$ss);
?>
<script>
	 alert("updated Successfully");
	 document.location="enroll_student_view.php";
</script>