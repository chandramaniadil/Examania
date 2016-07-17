<?php
include("../include/dbconnect.inc");
$a=$_REQUEST['chkid'];
$b=$_REQUEST['txttable'];
$c=$_REQUEST['txtcol'];
$s="";
foreach($a as $i)
{
	$s=$s.",".$i;
}
$s=substr($s,1);
//echo $s;

mysql_query("delete from $b where $c in($s)");
header("location:display_table.php");
?>