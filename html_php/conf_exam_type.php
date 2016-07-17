<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exam type window</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>
<?php
$a=$_REQUEST['txtname'];
$b=$_REQUEST['txtexamtype'];
$c=$_REQUEST['pattern'];
$d=$_REQUEST['txtnoq'];
$e=$_REQUEST['txtdur'];
$f=$_REQUEST['txtmarks'];


include("../include/dbconnect.inc");
include("../include/header.inc");
include("../include/admin_panel.inc"); 
mysql_query("insert into exam_type(exam_name,exam_types,exam_pattern,no_of_ques,duration,total_marks,exam_status) values('$a','$b','$c','$d','$e','$f',1)");


header("location:admin_panel_createexam.php");
?>
</div>
</div>
<?php
include("../include/footer.inc");

?>
</body>
</html>
