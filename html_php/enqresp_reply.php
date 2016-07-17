<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php
include("../include/dbconnect.inc");
include("../include/header.inc");
include("../include/admin_panel.inc");


$a=$_REQUEST['mid'];
$b=mysql_query("select * from studentenq where enq_id='$a'");
//echo $b;
$mail=mysql_fetch_array($b);
//echo $b;
?> 
  <center><h3>ENQUIRY RESPONSE</h3>
<form method="get" action="enqcheck_resp.php">
	<table>
		<tr><td align="right">To</td>
        	<td><textarea name="txtemail"  ><?php 
					echo $mail['s_email'];
				?></textarea></td>
		</tr>
	<tr><td align="right">Subject</td>
            <td><textarea name="txtsubject"></textarea></td>
		</tr>
       <tr><td align="right">Response</td>
            <td><textarea name="txtresponse" rows="10" cols="50" ></textarea></td>
		</tr>
       	<tr><td align="right"><input type="submit" value="OK" /></td>
        	<td><input type="reset" value="CANCEL" /></td>
          </tr>
        
	</table>
    </form>
    </center>
    </div>
 </div>
<?php
	include("../include/footer.inc");
?>  
        	
</body>
</html> 