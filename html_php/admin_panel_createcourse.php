<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_REQUEST['sta']))
{
	if($_REQUEST['sta']=='ok')
	{
		echo "Course has been created.";
	}
	else
	{
		echo "error";
	}
}
?>
<center><h3>CREATE COURSE</h3>
		<form method="get" action="confcourse.php">
        	<table>
            	<tr>
                	<td>Course name</td>
                    <td><input type="text" name="c_name" id="c_name" /></td>
                </tr>
                <tr>
                	<td>Duration</td>
                    <td><input type="text" name="c_dur" id="c_dur" /></td>
                </tr>
                <tr>
                	<td>Course Description</td>
                    <td><textarea name="c_info" id="c_info" /></textarea></td>
                </tr>
                <tr>
                	<td><input type="submit" value="OK" /></td>
                    <td><input type="reset" value="CANCEL" /></td>
             </table>
</body>
</html>