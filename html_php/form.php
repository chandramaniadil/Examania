<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form</title>
</head>
<body>
<!--ENQUIRY FORM-->
<table id="enqform">
	<tr>
    	<td>Name</td>
    	<td><input type="text" name="txtnameenq" id="txtnameenq"size="30" ></td>
    </tr>
    <tr>
        <td>Email id</td>
    	<td><input type="text" name="txtemailenq" id="txtemailenq"size="30" ></td>
     </tr>
     <tr>
        <td>Contact no</td>
    	<td><input type="text" name="txtcontactlenq" id="txtcontactenq"size="30" value="+91" ></td>
     </tr>
    
     <tr>
        <td>Enquiry</td>
        <td><textarea name="txtenq"rows="10" cols="40">Please enter your enquiry</textarea></td>
     </tr>
        <tr>
    	<td><input type="submit" value="OK"></td>
    	<td><input type="reset"value="CANCEL"></td>
      </tr>
</table>
<!--REGRISTRATION FORM-->
<table id="regform">
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
    	<td><input type="text" name="txtcontactlreg" id="txtcontactreg"size="30" value="+91" ></td>
     </tr>
    <tr>
    
        	<td>Course</td>
           <td> <select name="crs">
           <option selected>select course</option>
            <option value="1">2 year online program</option>
            <option value="2">1 year online course</option>
			<option value="3">Postal</option>
            <option value="4">Interview guidance</option>
            </select>
            </td>
    	</tr>
        <tr>
    	<td>Choose ur gender</td>
    	<td><input type="radio" name="gen" value="m">male</td>
        <td><input type="radio" name="gen" value="f">female</td>
       </tr>
    
    	<tr>
        <td>Date of birth</td>
        <td><input type="date" name="dtregs"/></td>
     </tr>
     <tr>
   		 <td>Address</td>
   		 <td><textarea name="txtaddreg"rows="10" cols="40">Please enter your address</textarea></td>
    </tr>
     <tr>
    	<td><input type="submit" value="OK"></td>
    	<td><input type="reset"value="CANCEL"></td>
      </tr>
</table>
<!--FEEDBACK FORM-->
<table id="feedback">
<tr>
    	<td>Name</td>
    	<td><input type="text" name="txtnameenq" id="txtnameenq"size="30" ></td>
    </tr>
    <tr>
        <td>Email id</td>
    	<td><input type="text" name="txtemailenq" id="txtemailenq"size="30" ></td>
     </tr>
     <tr>
        <td>Contact no</td>
    	<td><input type="text" name="txtcontactlenq" id="txtcontactenq"size="30" value="+91" ></td>
     </tr>
    
     <tr>
        <td>Feedback</td>
        <td><textarea name="txtenq"rows="10" cols="40">Please enter your feedback	</textarea></td>
     </tr>
        <tr>
    	<td><input type="submit" value="OK"></td>
    	<td><input type="reset"value="CANCEL"></td>
      </tr>
</table>
</body>
</html>
