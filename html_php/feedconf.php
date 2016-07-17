<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback form check</title>
</head>
<center>
<h3>FEEDBACK SUCESSFULL <b></b></h3>
<body>
<?php
$a=$_REQUEST['txtnamefeed'];
$b=$_REQUEST['txtemailfeed'];
$c=$_REQUEST['txtcontactfeed'];
$d=$_REQUEST['txtfeed'];


$con=mysql_connect("localhost","root","");
mysql_select_db("examania",$con);
mysql_query("insert into studentfeed(s_name,s_email,s_contact,s_feedback) values('$a','$b','$c','$d')");
echo"THANKS";
?>

</body>
</html>