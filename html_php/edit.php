<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>edit</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php
	include("../include/header.inc");
?>
<!--====================================================header closed================================================-->

<?php
	include("../include/quicklinks.inc");
?>
<!--=====================================================Quick links=================================================-->	

<?php
	include("../include/user_panel.inc");
?>

  <?php
	
	include("../include/dbconnect.inc");
	$s_id=$_REQUEST['s_id'];
$rsstudent_detail=mysql_query("select * from student_details where s_id='$s_id'",$con);
$row=mysql_fetch_array($rsstudent_detail);
?>
<form action="edit_update.php?s_id=$s_id" method="get">
<table>
<input type="hidden" name="s_id" value="<?php echo $row['s_id'];?>" />
<tr>
	<td>name</td>
    <td><input type="text" name="s_name" value="<?php   echo $row['s_name']; ?>" /></td>
</tr>
<tr>
	<td>fathers name</td>
    <td><input type="text" name="f_name" value="<?php echo $row['f_name'] ?>" /></td>
</tr>
<tr>
	<td>e-mail</td>
    <td><input type="text" name="s_email" value="<?php echo $row['s_email']; ?>"/></td>
</tr>
<tr>
	<td>contact</td>
    <td><input type="text" name="s_contact" value="<?php echo $row['s_contact']; ?>"/></td>
</tr>
<tr>
	<td>gender</td>
    <td><input type="text" name="s_gen" value="<?php echo $row['s_gen']; ?>"/></td>
</tr>
<tr>
	<td>course name</td>
    <td><input type="text" name="course_name" value="<?php echo $row['course_name']; ?>"/></td>
</tr>
<tr>
	<td>date of birth</td>
    <td><input type="text" name="dob" value="<?php echo $row['dob']; ?>"/></td>
</tr>
<tr>
	<td>address</td>
    <td><input type="text" name="s_add" value="<?php echo $row['s_address']; ?>"/></td>
</tr>
<tr>
	<td>user name</td>
    <td><input type="text" name="s_username" value="<?php echo $row['s_username']; ?>"/></td>
</tr>
<tr>
	<td>password</td>
    <td><input type="password" name="s_pass" value="<?php echo $row['s_pass']; ?>"/></td>
</tr>
<tr>
	<td><input type="submit" value="save" </td>
	<td><input type="submit" value="cancel" /></td>
</tr>
</table>	
</form>
</div>
</div>
</div><!--end of middleone-->


<!--====================================================footer starts================================================-->
<?php
 	include("../include/footer.inc");
?>   

</body>
</html>