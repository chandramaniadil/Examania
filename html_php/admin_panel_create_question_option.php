<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="get" action="quesconf.php">		
<table>
        <tr>
			<td>Question</td>
            <td><textarea rows="10" cols="50" name="exam_id" id="exam_id"/></textarea></td>
        </tr>
        <tr>
        	<td>Correct Answer</td>
            <td><input type="radio" name="ans_A" value="A" >A
            	<input type="radio" name="ans_B" value="B" >B
           		<input type="radio" name="ans_C" value="C" >C
            	<input type="radio" name="ans_D" value="D" >D</td>
        </tr>            
		<tr>
        	<td>Option A</td>
            <td><input type="text" name="opt_a" id="opt_a"/></td>
        </tr>
        <tr>
        	<td>Option B</td>
            <td><input type="text" name="opt_b" id="opt_b"/></td>
        </tr>
        <tr>
        	<td>Option C</td>
            <td><input type="text" name="opt_c" id="opt_c"/></td>
        </tr>
        <tr>
        	<td>Option D</td>
            <td><input type="text" name="opt_d" id="opt_d"/></td>
        </tr>
</table>


</body>
</html>