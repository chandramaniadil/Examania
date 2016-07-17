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
<!--====================================================header closed================================================-->

<?php
		include("../include/admin_panel.inc");
	?>
<h3>EXAMS</h3>
<P>The table shows all the exams that are to be held.</P>
<?php

include("../include/print_table_exam_status.inc"); 
displayTable("select * from exam_type where exam_status=1");
  
?>
</div>
</div>
  <?php
 	include("../include/footer.inc");
?>     

</body>
</html>