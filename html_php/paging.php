<?php
include("../include/dbconnect.inc");
$rsdetails=mysql_query("select * from student_details where s_accept=0 and s_status=0");

$nof=20;
$total=mysql_num_rows($rsdetails);
$totalpages=ceil($total/$nof);
$startpoint=($_REQUEST['pg']-1)*$nof;

for($i=1;$i<$totalpages;$i++)
{
	echo "<a href='admin_panel_appresp.php?pg=$i'>";
	echo $i;
	echo "</a>";
}

$rs=mysql_query("select * from student_details where s_accept=0 and s_status=0 limit $startpoint,$nof ");

?>