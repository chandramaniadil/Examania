<html>
<head>
<title>Admin panel</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

<style>
	*
{
	padding:0px;
	margin:0px;
	
}
	#admin_left
{
	list-style:none;
	list-style-image:none;
	padding:0px;
	
	
}
	#admin_left ul
{
	list-style:none;
	list-style-image:none;
	padding:0px;
}
#admin_left li
{
	background-color:green;
	margin-top:10px;
	width:150px;
	float:!important;
	margin-left:15px;
	height:60px;
	line-height:50px;
	text-align:center;
	font-size:18px;
	
	
}
#admin_left li a
{
	color:yellow;
	display:block;
	text-decoration:none;
	font-size:16px;
	
}
#admin_left li a:hover
{
	color:pink;
	background-color:yellow;
	/*border-bottom:red 10px solid;*/
	height:60px;
	
}
#admin_main
{
	border:thick;
	border-width:10px;
	margin: 20px 0px 180px 150px;
	width:810px;
	position:absolute;
	float:right;
	
	
}

</style>
</head>
<body>
<?php
	include("../include/header.inc");
	
?>
<div id="middleone">
<div id="admin_left">
	<ul>
    	<li><h4>CATEGORIES</h4></li>
        <li><a href="admin_panel_dash.php">Dashboard</a></li>
        <li><a href="admin_panel_createexam.php">Create Exam</a></li>
        <li><a href="admin_panel_reports2.php">Exam Reports</a></li>
        <li><a href="admin_panel_appresp.php">Student Records</a></li>
        <li><a href="admin_panel_enqresp.php">Enquiry Response</a></li>
        <li><a href="admin_panel_feedresp.php">Feedback Response</a></li>
    	<li><a href="">Logout</a></li>
    </ul>
</div>
<div id="admin_main">

</div>
</div>
<?php
	include("../include/footer.inc");
?>
</body>
</html>








