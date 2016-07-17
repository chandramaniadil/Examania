<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquiry Check</title>
</head>
<center>
<h3>ENQUIRY SUCESSFULL<b></b></h3>
<body>

<?php
$a=$_REQUEST['txtnameenq'];
$b=$_REQUEST['txtemailenq'];
$c=$_REQUEST['txtcontactenq'];
$d=$_REQUEST['txtenq'];


include("../include/dbconnect.inc");
mysql_query("insert into studentenq(s_name,s_email,s_contact,s_enquiry) values('$a','$b','$c','$d')");
echo"THANKS";
?>

</body>
</html>