<html>
<head>
<title>Admin panel Dashboard</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<style>
#admin_dash
	{	
		width:690px;
		height:auto;
		border-color:#003;
	}
#admin_dash ul
{
	list-style:none;
	list-style-image:none;
}
#admin_dash li
{
	background-color:green;
	margin-top:15px;
	width:150px;
	float:right;
	margin-left:10px;
	height:40px;
	line-height:30px;
	text-align:center;
	font-size:18px;
	
	
}
#admin_dash li a
{
	color:yellow;
	display:block;
	text-decoration:none;
	font-size:16px;
	
}
#admin_dash li a:hover
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


<?php
		include("../include/admin_panel.inc");
?>
<div id="admin_dash">
	<ul>
    	<li><a href="admin_panel_newusers.php">New Users</a></li>
        <li><a href="admin_panel_register.php">Registered Users</a></li>
        <li><a href="admin_panel_downloads.php">No of downloads</a></li>
        <li><a href="admin_panel_visits.php">No of Visits</a></li>
     </ul>
</div>
</div>
<?php
 	include("../include/footer.inc");
?>   
       
</body>
</html>
