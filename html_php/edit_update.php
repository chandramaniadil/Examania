<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit-Update</title>
</head>
<body>
 <?php
	
	include("../include/dbconnect.inc");
	$s_id=$_REQUEST['s_id'];
	$s_name=$_REQUEST['s_name'];
	$f_name=$_REQUEST['f_name'];
	$s_email=$_REQUEST['s_email'];
	$s_contact=$_REQUEST['s_contact'];
	$s_gen=$_REQUEST['s_gen'];
	$course_name=$_REQUEST['course_name'];
	$dob=$_REQUEST['dob'];
	$s_add=$_REQUEST['s_add'];
	$s_username=$_REQUEST['s_username'];
	$s_pass=$_REQUEST['s_pass'];
$rsstudent_detail=mysql_query("select * from student_details where s_id='$s_id'",$con);
$row=mysql_fetch_array($rsstudent_detail);
mysql_query("update student_details set s_name='$s_name',f_name='$f_name',s_email='$s_email',s_contact='$s_contact',s_gen='$s_gen',course_name='$course_name',dob='$dob',s_address='$s_add',s_username='$s_username',s_pass='$s_pass' where s_id=$s_id",$con); 


header("location:user_myprofile.php");

?>
</body>
</html>