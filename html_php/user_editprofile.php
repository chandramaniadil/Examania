<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>id to edit profile</title>
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
<?php
	include("../include/user_panel.inc");
?>


<form action="edit.php" method="get">
Enter your id to edit profile<input type="text" name="s_id" />
<input type="submit" value="ok" />
</form>
</div> 
</div>
<?php

include("../include/footer.inc"); 
?>


</body>
</html>