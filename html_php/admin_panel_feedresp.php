<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
	include("../include/header.inc");
?>
<?php
	include("../include/admin_panel.inc");
?>

<?php
include("../include/dbconnect.inc");
$rsfeed=mysql_query("select * from studentfeed",$con);
echo "<table border=1>";
echo "<tr>";
echo "<th>"."FEED-ID"."</th>";
echo "<th>"."SNAME"."</th>";
echo "<th>"."SEMAIL"."</th>";
echo "<th>"."SCONTACT"."</th>";
echo "<th>"."FEEDBACK"."</th>";
echo  "</tr>";
while($row=mysql_fetch_array($rsfeed))
{	$x=$row["feed_id"];
	echo "<tr>";
	
	echo "<td>";
	echo $row["feed_id"];
	echo "</td>";
	
	echo "<td>";
	echo $row["s_name"];
	echo "</td>";
	
	echo "<td>";
	echo $row["s_email"];
	echo "</td>";
	
	echo "<td>";
	echo $row["s_contact"];
	echo "</td>";
	
	echo "<td width=500px>";
	echo "<a href='feedresp_reply.php?mid=$x'>";
	echo $row["s_feedback"];
	echo "</a>";
	echo "</td>";
	
	echo"</tr>";
}
echo"</table>";	



?>
</div>
<?php
 	include("../include/footer.inc");
?>   
</body>
</html>