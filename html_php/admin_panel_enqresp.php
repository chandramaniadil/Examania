<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel Enquiry Response</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<style>
#admin_enq
{
	width:680px;
	
	height:300px;
	border-style:solid;
	border-width:2px;
	border-color:#003;
}
</style>

</head>
<body>
<?php
	include("../include/header.inc");
	
?>
<?php
		include("../include/admin_panel.inc");
?>
<div id="admin_enq">
<?php
include("../include/dbconnect.inc");
$rsenq=mysql_query("select * from studentenq",$con);
echo "<table border=1>";
echo "<tr>";
echo "<th>"."ENQ-ID"."</th>";
echo "<th>"."SNAME"."</th>";
echo "<th>"."SEMAIL"."</th>";
echo "<th>"."SCONTACT"."</th>";
echo "<th>"."SENQUIRY"."</th>";
echo  "</tr>";
while($row=mysql_fetch_array($rsenq))
{	$x=$row["enq_id"];
	echo "<tr>";
	
	echo "<td>";
	echo $row["enq_id"];
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
	echo "<a href='enqresp_reply.php?mid=$x'>";
	echo $row["s_enquiry"];
	echo "</a>";
	echo "</td>";
	
	echo"</tr>";
}
echo"</table>";	
?></div></div>>
<?php
	include("../include/footer.inc");
?>
</body>
</html>
