<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel Dashboard</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<style>
#admin_dash
	{	
		width:680px;
		height:500px;
	}
#admin_dash ul
{
	list-style:none;
	list-style-image:none;
	padding:0px;
}
#admin_dash ul li
{
	background-color:green;
	
	width:150px;
	float:left;
	margin-left:10px;
	margin-right:10px;
	height:40px;
	line-height:30px;
	text-align:center;
	font-size:18px;
	
	
}
#admin_dash ul li a
{
	color:yellow;
	display:block;
	text-decoration:none;
	font-size:16px;
	
}
#admin_dash ul li a:hover
{
	color:pink;
	background-color:yellow;
	/*border-bottom:red 10px solid;*/
	height:40px;
	
}

	</style>
</head>
<body>
<?php
	include("../include/header.inc");
?>
<!--====================================================header closed================================================-->

<?php
		include("../include/admin_panel.inc");
	?>
<div id="admin_dash">
	<ul>
    	<li><a href="admin_panel_reports_exams.php" >Exams</a></li>
        <li><a href="admin_panel_reports_results.php" >Results</a></li>
        <li><a href="admin_panel_reports_progresscard.php">Progress Card</a></li>
        
     </ul>
  </div>
  
 
  </div>
  </div>
  <?php
 	include("../include/footer.inc");
?>     
</body>
</html>

