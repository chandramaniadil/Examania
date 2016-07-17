<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="file:///C|/wamp/www/examania/css/style.css" />
<title>Untitled Document</title>
</head>

<body>
<?php

  $con=mysql_connect("localhost","root","");
  mysql_select_db("examania",$con);
 	$no=$_REQUEST['s_no'];
  $rsresult=mysql_query("select * from student_exam where s_id=$no",$con);
  $num=mysql_num_rows($rsresult);
 while($row=mysql_fetch_array($rsresult))
 { 
  	echo $row['s_id']; 
	echo "<br>";
	echo $row['exam_id']; 
	echo "<br>";
	echo $row['total_marks'];
	echo "<br>";
	echo $row['correct'];
	echo "<br>";
	echo $row['incorrect'];
	echo "<br>";
	echo $row['unattempted'];
	
 }
?>
</body>
</html>