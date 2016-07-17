<html>
<head>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
 <?php
	include("../include/header.inc");
?>
<?php
		include("../include/admin_panel.inc");
?>
<center><h3>CREATE THE EXAM</h3>
<form  method="get" action="conf_exam_type.php">
	<table cellpadding="6px" cellspacing="6px">
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
 		<tr><td align="right">Exam name</td>
    		<td><input type="text" value="" name="txtname"></td>
        </tr>
		<tr><td align="right"> Exam Type</td><td>
    		<select name="txtexamtype">
    			<option>Minor</option>
        		<option>Major</option>
        		<option>Practice</option>
        	</select>
            </td>
        </tr>
		<tr><td align="right"> Exam Pattern</td>
        	<td><input type="radio" name="pattern" value="negative" checked>Negative
         		<input value="non-negative" name="pattern" type="radio">Non-Negative</td>
        </tr>
		<tr><td align="right">No of Question</td> 
        	<td><input type="text" name="txtnoq"></td> 
        </tr>
		<tr><td align="right">Duration(mm:ss) for each question</td>
        	<td><input type="text" name="txtdur"></td>
        </tr>
    	<tr><td align="right">mark of each question</td>
        	<td><input type="text" name="txtmarks"></td>
        </tr>  
        <tr><td align="right"> neagtive mark of each question</td>
        	<td><input type="text" name="txtmarks_neg"></td>
        </tr>  
   			<tr><td align="right"><input type="submit" value="OK"></td>
        	<td><input type="reset" value="CANCEL"></td>
        </tr>
	</table>

 </form>
 </center>
 <p>The table shows all the exams that has been created<br>
 	<b>Update</b> the status of exam if you want to disable them.</p>
 <?php
 require_once("../include/print_table_exam_status.inc"); 
displayTable("select * from exam_type ");
 ?>
 </div>
 </div>
<?php
 	include("../include/footer.inc");
?>
</body>
</html>
