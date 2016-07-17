<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Response</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php

	include("../include/header.inc");
?>
<!--====================================================header closed================================================-->

<?php
	include("../include/admin_panel.inc");
?>
<!--=====================================================Quick links=================================================-->	
<h3>APPLICATION RESPONSE</h3>
<p>The table shows the applicants who have registered.<br>
	To accept them select the <b>Accept</b> button to accept.

<?php

include("../include/print_table_student_accept.inc"); 
displayTable("select * from student_details where s_accept=0");

?>
</div>
</div>
<!--====================================================footer starts================================================-->
<?php
 	include("../include/footer.inc");
?>   



</body>
</html>
