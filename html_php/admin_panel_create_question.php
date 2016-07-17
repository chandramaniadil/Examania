<!-- admin_panel_create_course.php-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>create_course</title>
</head>
<body>
 <?php
	include("../include/header.inc");
?>
<?php
		include("../include/admin_panel.inc");
?>

<center>'
<h3>Create Question</h3>
<form method="get" action="admin_panel_create_question_option.php">
	<table>
    	<tr>
        	<td>Course</td>
            <td><select name="c_sel"><?php
					require_once("../include/dbconnect.inc");
					$rscourse=mysql_query("select * from courses",$con);
					$col=mysql_num_fields($rscourse);
					for($i=0;$i<$col;$i++)
{
	
	$row=mysql_fetch_array($rscourse);
	echo "<option value='$i+1'>".$row['c_name']."</option>";
}
				?></select></td>
        </tr>
    	<tr>
        	<td>Exam-id</td>
            <td><input type="text" name="exam_id" id="exam_id"/></td>
        </tr>
        <tr>
        	<td>Course-id</td>
            <td><input type="text" name="course_id" id="course_id"/></td>
        </tr>
        <tr>
        	<td>No of questions</td>
            <td><input type="text" name="no_of_ques" id="no_of_ques"/></td>
        </tr>
        <tr>
        	<td><input type="submit" value="OK" /></td>
            <td><input type="reset" value="CLEAR" /></td>
        </tr>
        
	</table>
</form>
</div>
</div>
<?php
 	include("../include/footer.inc");
?>

</body>
</html>











<body>
</body>
</html>
