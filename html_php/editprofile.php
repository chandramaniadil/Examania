<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
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
<div id="userspace">
	<center><h3>EDIT PROFILE</h3></center>
<form>
<table>

<tr>
	<td>name</td>
    <td><input type="text" name="name" /></td>
</tr>
<tr>
	<td>address</td>
    <td><input type="text" name="address" /></td>
</tr>
<tr>
	<td>contact no</td>
    <td><input type="text" name="address" /></td>
</tr>
<tr>
	<td>e-mail</td>
    <td><input type="text" name="e-mail" /></td>
</tr>
<tr>
	<td>password</td>
    <td><input type="password" name="address" /></td>
</tr>
<tr>
	<td>confirm password</td>
    <td><input type="password" name="address" /></td>
</tr>
<tr>
	<td><input type="submit" value="save" /></td>
	<td><input type="submit" value="cancel" /></td>
</tr>
</table>
</form>

</div><!--closing of userspace-->
</div>
<!--====================================================footer starts================================================-->
<?php
 	include("../include/footer.inc");
?>   

</body>
</html>
