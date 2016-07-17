<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
$c_name=$_REQUEST['c_name'];
$c_dur=$_REQUEST['c_dur'];
$c_info=$_REQUEST['c_info'];


include("../include/dbconnect.inc");
include("../include/header.inc");
include("../include/admin_panel.inc"); 
mysql_query("insert into courses(c_name,duration,info) values('$c_name','$c_dur','$c_info')");


header("location:admin_panel_createcourse.php?sta=ok");
?>
</div>
</div>
<?php
include("../include/footer.inc");

?>










?>
</body>
</html>