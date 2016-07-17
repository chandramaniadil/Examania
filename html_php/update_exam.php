<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
require_once("../include/dbconnect.inc");
$tab=$_REQUEST['txttable'];
$col=$_REQUEST['txtcol'];
$id=$_REQUEST['checkitem'];
$a=$id;
$s=$a[0];
//foreach($a as $i)
for($i=1;$i<count($a);$i++)
{
	$s=$s.",".$a[$i];
}
echo $s;
//$s=substr($s,1);

mysql_query("update $tab set exam_status=0 where $col in($s)");




header("location:admin_panel_createexam.php");
?>


</body>
</html>