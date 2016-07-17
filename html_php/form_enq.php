<html>
<head>
<title>Enquiry Form</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>
<?php
	include("../include/header.inc");
	include("../include/quicklinks.inc");
?>
<!--ENQUIRY FORM-->
<center><h3>ENQUIRY FORM</h3></center>
<center><form id="enqform" method="get" action="enqconf.php">
<table id="enqform" cellpadding="6px" cellspacing="6px">
	<tr>
    	<td align="right">Name</td>
    	<td><input type="text" name="txtnameenq" id="txtnameenq"size="30" ></td>
    </tr>
    <tr>
        <td align="right">Email id</td>
    	<td><input type="text" name="txtemailenq" id="txtemailenq"size="30" ></td>
     </tr>
     <tr>
        <td align="right">Contact no</td>
    	<td><input type="text" name="txtcontactenq" id="txtcontactenq"size="30" value="+91" ></td>
     </tr>
    
     <tr>
        <td align="right">Enquiry</td>
        <td><textarea name="txtenq"rows="10" cols="40"></textarea></td>
     </tr>
        <tr>
    	<td align="right"><input type="submit" value="OK"></td>
    	<td><input type="reset"value="CANCEL"></td>
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
