<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
require_once("../include/dbconnect.inc");
$tab=$_REQUEST['tab'];
$col=$_REQUEST['col1'];
$rid=$_REQUEST['id'];
mysql_query("delete from $tab where $col=$rid");

echo "deleted";


?>


</body>
</html>