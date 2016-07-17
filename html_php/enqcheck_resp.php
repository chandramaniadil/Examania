<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>enq check resp</title>
</head>

<body>
<?php

include("../include/dbconnect.inc");
$a=$_REQUEST['txtemail'];
$b=$_REQUEST['txtsubject'];
$c=$_REQUEST['txtresponse'];
mysql_query("insert into enq_response(s_email,e_subject,e_response) values('$a','$b','$c')",$con);
echo "Response has been sent";

header("location:admin_panel_enqresp.php");
?>
</body>
</html>