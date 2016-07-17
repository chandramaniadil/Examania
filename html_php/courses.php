<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courses</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

</head>
 <body>
 <?php
	include("../include/header.inc");
?>
<!--====================================================header closed================================================-->

<?php
	include("../include/quicklinks.inc");
?>
<!--=====================================================Quick links=================================================-->	

<div id="dynamic" style="width:650px; height:auto;"">

 <?php
	
	include("../include/dbconnect.inc");
$rscourse=mysql_query("select * from courses",$con);
$col=mysql_num_fields($rscourse);
for($i=0;$i<$col;$i++)
{
	
	$row=mysql_fetch_array($rscourse);
	echo "<h3>".$row['c_name']."</h3>";
	echo "<h5>Duration-".$row['duration']."</h5>";
		echo "<p style='size:14px'>".$row['info']."</p>";
}
?>
 
	</div><!--end of dynamic-->
</div><!--end of middleone-->


<!--====================================================footer starts================================================-->
<?php
 	include("../include/footer.inc");
?>   

</body>
</html>