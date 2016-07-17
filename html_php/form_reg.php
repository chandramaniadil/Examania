o<html>
<head>
<title>Registration Form</title>
<link href="../css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php
	include("../include/header.inc");
	include("../include/quicklinks.inc");
?>
<!--REGISTRATION FORM-->
<center><h3>REGISTRATION FORM</h3>
<form id="regform" method="get" action="regconf.php">
<table>
<tr>
    	<td>Name</td>
    	<td><input type="text" name="txtnamereg" id="txtnamereg" size="30" ></td>
    </tr>
    <tr>
    	<td>Father Name</td>
    	<td><input type="text" name="txtfnamereg" id="txtfnamereg" size="30" ></td>
    </tr>
    <tr>
        <td>Email id</td>
    	<td><input type="text" name="txtemailreg" id="txtemailreg" size="30" ></td>
     </tr>
      <tr>
        <td>Contact no</td>
    	<td><input type="text" name="txtcontactreg" id="txtcontactreg"size="30" value="0" ></td>
     </tr>
    <tr>
    
        	<td>Course</td>
           <td> <select name="crs">
           <option selected>select course</option>
            <option value="2 year">2 year online program</option>
            <option value="1 year">1 year online course</option>
			<option value="postal">Postal</option>
            <option value="interview">Interview guidance</option>
            </select>
            </td>
    	</tr>
        <tr>
    	<td>Choose ur gender</td>
    	<td><input type="radio" name="gen" value="male">male</td>
        <td><input type="radio" name="gen" value="female">female</td>
       </tr>
    
    	<tr>
        <td>Date of birth</td>
        <td><input type="date" name="dtreg" ></td>
     </tr>
     <tr>
   		 <td>Address</td>
   		 <td><textarea name="txtaddreg" rows="10" cols="40">Please enter your address</textarea></td>
    </tr>
      <tr>
        <td>User name</td>
    	<td><input type="text" name="txtusername" id="txtusername" size="30" ></td>
     </tr>
    <tr>
        <td>Password</td>
    	<td><input type="password" name="txtuserpass" id="txtuserpass" size="30" ></td>
     </tr>
    <tr>
    	<td><input type="submit" value="OK"></td>
    	<td><input type="reset" value="CANCEL"></td>
      </tr>
     
</table></form></center>
	</div>
</div>
<?php
	include("../include/footer.inc");
?>

</body>
</html>
