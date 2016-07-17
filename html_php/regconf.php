<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Check</title>
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

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("examania",$con);
$a=$_REQUEST['txtnamereg'];
$b=$_REQUEST['txtfnamereg'];
$c=$_REQUEST['txtemailreg'];
$d=$_REQUEST['txtcontactreg'];
$e=$_REQUEST['gen'];
$f=$_REQUEST['crs'];
$g=$_REQUEST['dtreg'];
$h=$_REQUEST['txtaddreg'];
$i=$_REQUEST['txtusername'];
$j=$_REQUEST['txtuserpass'];


mysql_query("insert into student_details(s_name,f_name,s_email,s_contact,s_gen,course_name,dob,s_address,s_username,s_pass,s_type) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','user')");
echo"<h3><center>REGISTRATION SUCESSFULL</center></h3>";
?>
</div>
</div>
  <?php
 	include("../include/footer.inc");
?>     

</body>
</html>