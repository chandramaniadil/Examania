<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feedback Form</title>
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

<!--FEEDBACK FORM-->
<center><h3>FEEDBACK FORM</h3></center>
<center><form id="feedback" method="get" action="feedconf.php"> 
<table cellpadding="6px" cellspacing="6px">
<tr>
    	<td align="right">Name</td>
    	<td><input type="text" name="txtnamefeed" id="txtnamefeed"size="30" ></td>
    </tr>
    <tr>
        <td align="right">Email id</td>
    	<td><input type="text" name="txtemailfeed" id="txtemailfeed"size="30" ></td>
     </tr>
     <tr>
        <td align="right">Contact no</td>
    	<td><input type="text" name="txtcontactfeed" id="txtcontactfeed"size="30" value="+91" ></td>
     </tr>
    
     <tr>
        <td align="right">Feedback</td>
        <td><textarea name="txtfeed"rows="10" cols="40"></textarea></td>
     </tr>
        <tr>
    	<td align="right"><input type="submit" value="OK"></td>
    	<td><input type="reset" value="CANCEL"></td>
      </tr>
</table>
</form>
</center>
</div></div>
<?php
 	include("../include/footer.inc");
?>   

</body>
</html>
