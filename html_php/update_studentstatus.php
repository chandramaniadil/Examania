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
//$s=substr($s,1)




mysql_query("update $tab set s_status=1 where $col in($s)");

header("location:admin_panel_newusers.php");
?>

