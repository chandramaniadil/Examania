<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel Exam reports</title>
<style>
*
{
	margin:0px;
	width:0px;
}

#admin
	{	
		width:680px;
		height:auto;
		/*border-style:solid;
		border-width:2px;
		border-color:#003;*/
	
	}
#admin ul
{
	list-style:none;
	height:100%;
	width:100%;
	background-color:#69F;
	
	/* list-style-image:none; */
	
	
}
#admin ul li
{
	padding:0px;
	background-color:#C33;
	width:150px;
	height:50px;
	text-align:center;
	float:left;
	margin-left:5px;
	padding-top:5px;
	
	line-height:30px;

	
}
#admin ul li a
{
	color:yellow;
	display:block;
	text-decoration:none;
	font-size:16px;	
	
	
	
}
#admin ul li a:hover
{
	color:pink;
	background-color:yellow;
	/*border-bottom:red 10px solid;
	height:40px; */
	
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
<div id="admin">
	<ul>
    	<li><h4>CATEGORIES</h4></li>
        <li><a href="admin_panel_dash.php">Dashboard</a></li>
        <li><a href="admin_panel_createexam.php">Create Exam</a></li>
        <li><a href="admin_panel_createcourse.php">Create Course</a></li>
    </ul>
</div>
 <!-- END OF Admin_Reports -->
    </div>
<?php
 	include("../include/footer.inc");
?>     
</body>
</html>
