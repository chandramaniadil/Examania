<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("../include/dbconnect.inc");
$rsschedule=mysql_query("select * from exam_schedule",$con);
 $num=mysql_num_rows($rsschedule);
 //echo $num;
	while($row=mysql_fetch_array($rsschedule))
		{
			echo $row['exam_id']; 
			echo "<br>";
			echo $row['exam_name']; 
			echo "<br>";
			echo $row['exam_date'];
			echo "<br>";
			echo $row['exam_time'];
			echo "<br>";
			
		}
		
?>
</body>
</html>